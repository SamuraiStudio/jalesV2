
<?php
session_start();
if(!isset($_SESSION['usuario'])){
  Header("Location: login.php");
}else {
  include('assets/php/conection.php');

  // Conecta a la bd
  $db = new DB();
  $pdo = $db->connect();
  $username = $_SESSION['usuario']['id'];
  //$query = "SELECT usiddo, apodo, comentario, id FROM uscoment, usuario WHERE uscoment.usiddir = ".($username)." AND  usuario.id = ".($username)."";
  $query=
      'SELECT uscoment.comentario, uscoment.calif, usuario.apodo FROM uscoment INNER JOIN usuario ON  uscoment.usiddo = usuario.id WHERE uscoment.usiddir = "'.($username).'"';
  $stmt = $pdo -> prepare($query);
  $stmt -> execute(array());//Para sacar los comentarios en la seccion principal
  $ssss = $pdo -> prepare($query);
  $ssss -> execute(array());//Para sacar los comentarios del boton ver comentarios
  //Nos devuelve informacion del usuario
  $VIEW = 'view_profile_privado';
  $query2 = "SELECT * FROM $VIEW WHERE usid = ?";
  $smtp = $pdo -> prepare($query2);
  $smtp -> execute([$_SESSION['usuario']['id']]);
  $user= $smtp->fetch();
 ?>
<!--  SITIO - PEFIL DE VISITA / VISITADO POR OTRO(S) USUARIO(S) QUE NO ES EL "PROPIETARIO / DUEÑO" DE LA CUENTA.  -->
<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Perfil</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas + puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/css/toastr.min.css">
  </head>

  <!-- CUERPO -->
  <body style="background: #E6E1E1;">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <?php include "_header.php"; ?>

    <!---------------------------------------------------- PERFIL -------------------------------------------------------->

      <div class="container" style="background: #ffffff;">
          <div class="form-group">
            <br>

            <!--Título principal-->
            <div class="container p-2 mg-1 texto" style="background: #F0F0F0;">
              <br>
              <h3 class="text-dark" style="text-align: center;"><strong> Perfil </strong></h3>
            </div>
            <br>
            <div class="row mb-3">

              <!------------------------ Columna de lado izquiedo --------------------->
              <div class="col-lg-4">

                <!--Imagen - Foto de peril-->
                  <div class="card mb-3">
                    <div class="card-body text-center shadow">

                      <!--Título de la sección-->
                      <div class="card-header texto">
                        <h5 class="font-weight-bold" style="text-align: center;"> Foto </h5>
                      </div>

                      <!--Foto del usuario-->
                      <img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image3.jpeg" width="185" height="190">
                    </div>
                  </div>

                  <!--Sección de comentarios-->
                  <div class="card shadow mb-4">

                    <!--Título-->
                    <div class="card-header py-3 texto">
                      <h5 class="font-weight-bold m-0">Comentarios</h5>
                    </div>

                      <!--Contenedor de la sección-->
                      <div class="card-body" style="height:315px; overflow: scroll;">
                        <?php
                        foreach ($stmt as $result) {
                        ?>
                          <div class="container bg-light">

                            <!--Comentario 1-->
                            <div class="row mb-3 py-2 ml-2 texto">

                              <!--Nombre de quién realiza el comentario-->
                                <h6><strong>Usuario: </strong>"<?php echo ($result['apodo']);?>"</h6>

                            </div>

                            <!--Calificación - Estrellas-->
                            <div class="row mb-3 ml-2 texto">
                              <label for="estrellas">Estrellas: </label>
                              <?php
                                  $estrella = $result['calif'];//TOMA EL VALOR DE LA CALIFICACIÓN
                                  if($estrella==1){ //SI ES 1
                              ?>
                               <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="2es" style = color:black></span>
                               <span class="fa fa-star ml-2" id="3es" style = color:black></span>
                               <span class="fa fa-star ml-2" id="4es" style = color:black></span>
                               <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                              <?php
                             }
                              ?>
                              <?php
                                  if($estrella==2){ //SI ES 2
                              ?>
                               <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="3es" style = color:black></span>
                               <span class="fa fa-star ml-2" id="4es" style = color:black></span>
                               <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                              <?php
                             }
                              ?>
                              <?php
                                  if($estrella==3){ //SI ES 3
                              ?>
                               <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="3es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="4es" style = color:black></span>
                               <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                              <?php
                             }
                              ?>
                              <?php
                                  if($estrella==4){ //SI ES 4
                              ?>
                               <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="3es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="4es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                              <?php
                             }
                              ?>
                              <?php
                                  if($estrella==5){ //SI ES 5
                              ?>
                               <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="3es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="4es" style = color:orange></span>
                               <span class="fa fa-star ml-2" id="5es" style = color:orange></span>
                              <?php
                             }
                              ?>
                            </div>

                            <!--Comentario-->
                            <div class="row texto ml-2 mr-1">
                              <p class="pmediano" style="text-align: justify;" ><strong>Comentario:</strong><br><br> <?php echo $result['comentario'] ?></p>
                            </div>
                          </div>
                          <hr>
                          <?php } ?>

                      </div>

                      <!-- Botones - Crear y Más comentario(s) -->
                      <div class="form-group">
                        <div class="border border-light p-1 mb-2">
                          <div class="container">

                            <!--Fila de botones-->
                            <div class="row">

                                <!--Columna 1. Botón/Modal "Crear comentario"-->
                                <div class="col section1 text-center">

                                  <!-- 1.a. Botón - Crear Comentario -->
                                  <button class="btn text-white mt-3 pchiquito" style="background: #07A507; border-radius: 28px; width: 135px; height: 60px; text-align: center;" data-toggle="modal" data-target="#crearComentario">Crear comentario</button>

                                  <!-- 1.b. Creación de la ventana del modal -->
                                  <div id="crearComentario" class="modal fade" role="dialog">

                                    <!--1.c. Permite ver el contenido del modal -->
                                    <div class="modal-dialog">

                                      <!--1.d Aquí se coloca en condenido del modal-->
                                      <div class="modal-content">

                                        <!--1.e. Cabecera del modal-->
                                        <div class="modal-header texto">
                                          <!--Título del modal-->
                                          <h4 class="modal-title"><strong>Crear comentario.</strong></h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <form id="comentarios" name="comentarios" method="post">
                                        <!--1.f. Cuerpo del modal-->
                                        <div class="modal-body ml-2 mr-1">
                                          <p class="pchiquito m-1"style="text-align: justify;">Agrega un comentario para que todos conozcan el desempeño de este usuario.</p><br>

                                          <div class="container">
                                            <!--Estrellas-->
                                            <div class="row">
                                              <div class="m-1">
                                                <label class="pchiquito" for="">Dale una calificación:</label>
                                                <!--Íconos de estrella-->
                                                  <span class="fa fa-star ml-1" id="1estrella" value="1" onclick="calificar(this)"></span>
                                                  <span class="fa fa-star" id="2estrella"  value="2" onclick="calificar(this)"></span>
                                                  <span class="fa fa-star" id="3estrella"  value="3" onclick="calificar(this)"></span>
                                                  <span class="fa fa-star" id="4estrella"  value="4" onclick="calificar(this)"></span>
                                                  <span class="fa fa-star" id="5estrella"  value="5" onclick="calificar(this)"></span>
                                              </div>

                                            </div>

                                            <!--Nos muestra las estrellas-->
                                            <input name="estrellas" style="display:none" id="estrellas"></input>
                                            <!--Asigna el valor del usiddo-->
                                            <input name="usiddo" style="display:none;" value="<?php echo ($_SESSION['usuario']['id'])?>"> </input>


                                            <!--Comentario-->
                                            <div class="row form-label-group pt-1">
                                              <textarea class="form-control pchiquito" type="text" id="coment" maxlength="2000" name="coment" placeholder="" style="border-radius: 18px; height: 150px;"></textarea><br>
                                            </div>

                                            <!--Botón - Enviar comentario-->
                                            <div class="mb-3 texto"><br><button class="bnt btn-success text-white" type="submit" id="crea" style="border-radius: 18px; height: 45px; width: 180px;" name="crea">Enviar comentario</button>
                                            </div>
                                          </div>

                                        </div>
                                       </form>
                                      </div>
                                    </div>
                                  </div>

                                </div>

                                <!--Columna 2. Botón/Modal "Ver comentarios"-->
                                <div class="col section1 text-center">

                                  <!-- 2.a. Botón - Más comentarios -->
                                  <button class="btn btn-info mt-3 pchiquito" style="border-radius: 28px; width: 135px; height: 60px; text-align: center;" data-toggle="modal" data-target="#verComent">Ver comentarios</button>

                                  <!--2.b. Creación de la ventana del modal -->
                                  <div id="verComent" class="modal fade" role="dialog">
                                    <!--2.c. Permite ver el contenido del modal -->
                                    <div class="modal-dialog" style="height:450px; overflow: scroll">

                                      <!--2.d Aquí se coloca en condenido del modal-->
                                      <div class="modal-content">

                                        <!--2.e. Cabecera del modal-->
                                        <div class="modal-header texto">
                                          <h4 class="modal-title"><strong>Comentarios.</strong></h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                          <!--2.f. Cuerpo del modal-->
                                          <div class="modal-body">

                                            <!--Contenedor de la sección-->
                                            <div class="card-body">
                                              <?php foreach ($ssss as $hola) {

                                              ?>
                                              <div class="container">

                                                <!--Comentario 1-->
                                                <div class="row bg-light">
                                                  <!--Nombre de quién realiza el comentario-->
                                                  <div class="col texto" style="text-align: left;">
                                                    <h6 class="py-2"><strong>Usuario: </strong>"<?php echo ($hola['apodo']);?>"</h6>

                                                    <label>Estrellas</label>&nbsp;

                                                    <!--Íconos de estrella-->
                                                    <?php
                                                        $estrella2 = $hola['calif'];//TOMA EL VALOR DE LA CALIFICACIÓN
                                                        if($estrella2==1){ //SI ES 1
                                                    ?>
                                                     <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="2es" style = color:black></span>
                                                     <span class="fa fa-star ml-2" id="3es" style = color:black></span>
                                                     <span class="fa fa-star ml-2" id="4es" style = color:black></span>
                                                     <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                                                    <?php
                                                   }
                                                    ?>
                                                    <?php
                                                        if($estrella2==2){ //SI ES 2
                                                    ?>
                                                     <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="3es" style = color:black></span>
                                                     <span class="fa fa-star ml-2" id="4es" style = color:black></span>
                                                     <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                                                    <?php
                                                   }
                                                    ?>
                                                    <?php
                                                        if($estrella2==3){ //SI ES 3
                                                    ?>
                                                     <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="3es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="4es" style = color:black></span>
                                                     <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                                                    <?php
                                                   }
                                                    ?>
                                                    <?php
                                                        if($estrella2==4){ //SI ES 4
                                                    ?>
                                                     <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="3es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="4es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="5es" style = color:black></span>
                                                    <?php
                                                   }
                                                    ?>
                                                    <?php
                                                        if($estrella2==5){ //SI ES 5
                                                    ?>
                                                     <span class="fa fa-star ml-2" id="1es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="2es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="3es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="4es" style = color:orange></span>
                                                     <span class="fa fa-star ml-2" id="5es" style = color:orange></span>
                                                    <?php
                                                   }
                                                    ?>
                                                    <br><br>
                                                    <p class="pchiquito" style="text-align: justify;"><strong>Comentario</strong> <br><br> <?php echo $hola['comentario'] ?></p>
                                                  </div>
                                                </div>
                                                <br>
                                              </div>
                                              <hr>
                                              <?php  } ?>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <br>
              </div>

              <!------------------------ Columna de lado derecho --------------------->

                  <div class="col-lg-8">
                        <!--Definicion de las columnas para los espacios entre sección y sección-->
                        <div class="row mb-3 d-none">

                            <!--Espaciado-->
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>

                            <!--Espaciado-->
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Datos del usuario-->
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">

                                    <!--Título del apartado-->
                                    <div class="card-header py-3 texto">
                                      <h5 class="m-0 font-weight-bold" style="text-align: center;">Información general</h5>
                                    </div>

                                    <div class="card-body">

                                      <!--Formulario-->
                                      <form>

                                        <!--Fila 1 - Nickname y nombre-->
                                        <div class="form-row pb-3">

                                          <!--Nickname-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Nickname</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['apodo'];?></label>
                                            </div>
                                          </div>

                                          <!--Nombre-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Nombre</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['nom'];?></label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 2 - Apellidos-->
                                        <div class="form-row pb-3">

                                            <!--Apellido materno-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label for=""><strong>Apellido paterno</strong></label>
                                                <br>
                                                <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['app'];?></label>
                                              </div>
                                            </div>

                                            <!--Apellido materno-->
                                            <div class="col-xs-12 col-md-6">
                                              <div class="form-group texto">
                                                <label for=""><strong>Apellido Materno</strong></label>
                                                <br>
                                                <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['apm'];?></label>
                                              </div>
                                            </div>
                                        </div>


                                        <!--Fila 3 - Correo-->
                                        <div class="form-row pb-3">

                                          <!--Correo-->
                                          <div class="col">
                                            <div class="form-group texto">
                                              <label for=""><strong>Correo</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['correo'];?></label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 4 - Sexo y fecha de nacimiento-->
                                        <div class="form-row pb-3">

                                          <!--Sexo-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Sexo</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['sexo'];?></label>
                                            </div>
                                          </div>

                                          <!--Fecha de nacimiento-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Fecha de nacimiento</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['fecnac'];?></label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 5 - Área y especialidad -->
                                        <div class="form-row pb-3">

                                          <!--Área-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Área</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style=" border-bottom-color:#ada2a2;"><?php echo $user['arnom'];?></label>
                                            </div>
                                          </div>

                                          <!--Especialidad-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Especialidad</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['esp'];?></label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 6 - Estado y Ciudad -->
                                        <div class="form-row pb-3">

                                          <!--Estado-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Estado</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style=" border-bottom-color:#ada2a2;"><?php echo $user['estado'];?></label>
                                            </div>
                                          </div>

                                          <!--Ciudad-->
                                          <div class="col-xs-12 col-md-6">
                                            <div class="form-group texto">
                                              <label for=""><strong>Ciudad</strong></label>
                                              <br>
                                              <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;"><?php echo $user['ciudad'];?></label>
                                            </div>
                                          </div>
                                        </div>

                                        <!--Fila 7 - URL facebook-->
                                        <div class="form-row pb-3">

                                          <!--Redes sociales-->
                                          <div class="col">
                                            <center>
                                             <div class="form-group texto">
                                               <label class="form-control-plaintext labelchiquita" type="text" id="facebook" value="" readonly style="border-bottom-color:#ada2a2;">
                                               <a style="color: black;" href="<?php echo $user['fbref'];?>"><span class="fab fa-facebook-square" style="font-size: 30px;">&nbsp;&nbsp;</span><u>Da click para contactar por facebook</u></a></label>
                                               <br>
                                             </div>
                                            </center>
                                          </div>
                                        </div>

                                        <!--Fila 8 - Descripción-->
                                        <div class="form-row">

                                          <!--Descripción-->
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="texto" class="texto" for=""><strong>Descripción</strong></label>
                                              <p class="des" style="text-align: justify;" type="text">
                                                <?php echo $user['descripcion'];?>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                      </form>
                                    </div>
                                </div>
                            </div>
                      </div>
                </div> <!--FIN DE LA COLUMNA LADO DERECHO-->
            </div>
          </div>
      </div>
      <footer class="text-center text-lg-start text-white" style="background: #000000;">
          <!-- Copyright -->
          <div class="text-center p-3 texto" >
            © 2021 Copyright:
            <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
          </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/toastr.min.js"></script>
      <script type="text/javascript">
        if ($(window).width() > 992) {
          $(window).scroll(function(){
            if ($(this).scrollTop() > 40) {
              $('#navbar_top').addClass("fixed-top");
              $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
              $('#navbar_top').removeClass("fixed-top");
              $('body').css('padding-top', '0');
            }
          });
        } // end if
      </script>

      <script type="text/javascript">
      $(document).ready(function () {
          $('#crea').click(function(){
              // XMLHttpRequest
              event.preventDefault();
              var url1 = "assets/php/comentarios.php";
                $.ajax({
                   type: "POST",
                   url: url1,
                   data: $("#comentarios").serialize(),
                   success: function(data)
                   {
                           toastr["success"]("Excelente", "Se ha publicado tu comentario");
                           toastr.options = {
                                    "closeButton": true,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-center",
                                    "preventDuplicates": false,
                                    //"onclick": $(location).attr('href','profile_vistas.php'),
                                    "showDuration": "3000",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                  }

                       }
               });
          });
      });
      </script>
      <!--Script para las estrellas de evaluaciión
          Para mayor info: https://www.youtube.com/watch?v=KcwqodH4bGU-->
      <script type="text/javascript">

        var contador; //Se crea un variable llamada contador
        function calificar(item){ //Función calificar (mencionadas en los íconos de estrella)
           var calificacion = 0;
          console.log(item); //Muestra en consola las estrellas seleccionadas
          contador=item.id[0]; //Solo toma el valor del primer caracter (1 al 5)
          calificacion = parseInt(contador);
          console.log(calificacion);
          let nombre=item.id.substring(1); //Toma los valores después del primer caracter (después del 1,...,5), es decir 'estrella'
          for (let i=0;i<5;i++){
            if (i<contador){
              document.getElementById((i+1)+nombre).style.color ="orange"; //Pintará las cantidad de estrellas seleccionadas
            }
            else{
              document.getElementById((i+1)+nombre).style.color ="black"; //Pintará las cantidad de estrellas seleccionadas
            }
          }
        comentarios.estrellas.value = calificacion;
        }
      </script>
      <!--Script para las estrellas de evaluaciión
          Para mayor info: https://www.youtube.com/watch?v=KcwqodH4bGU-->

<?php } ?>
  </body>
</html>
