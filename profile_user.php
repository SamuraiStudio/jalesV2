<?php
session_start();
if (!isset($_SESSION['usuario']))
  Header("Location: login.php");
?>
<html>

<!-- ENCABEZADO -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
  <title>Mi perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
  <!--Iconos - Estrellas + puerta-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php
include "_header2.php";
require('assets/php/Consultas.php');

// variables
$consultas = new Consultas();
$idUsuario = $_SESSION['usuario']['id'];

// datos del usuario
$user = $consultas->DatosUsuario($idUsuario);

// comentarios hacia el usuario
$cardComentarios = $consultas->ComentariosUsuario($idUsuario);
?>

<!-- CUERPO -->

<body style="background: #E6E1E1;"><br>

  <!---------------------------------------------------- PERFIL -------------------------------------------------------->
  <div class="container" style="background: #ffffff;">
    <div class="form-group"><br>

      <!--Título principal-->
      <div class="container p-2 mg-1 texto" style="background: #F0F0F0;"><br>
        <h3 class="text-dark" style="text-align: center;"><strong> Bienvenido a tu perfil </strong></h3>
      </div><br>

      <div class="row mb-3">

        <!------------------------ Columna de lado izquiedo --------------------->
        <div class="col-lg-4">

          <!--Imagen - Foto de peril-->
          <div class="card mb-3">
            <div class="card-body text-center shadow">

              <!--Título de la sección-->
              <div class="card-header texto">
                <h5 class="text font-weight-bold" style="text-align: center;"> Tu foto </h5>
              </div>

              <!--Foto del usuario-->
              <img class="rounded-circle mb-3 mt-4" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['foto']); ?>" width="185" height="190">
            </div>
          </div>

          <!--Sección de comentarios-->
          <div class="card shadow mb-4">

            <!--Título-->
            <div class="card-header py-3 texto">
              <h5 class="text font-weight-bold m-0">Comentarios</h5>
            </div>

            <!--Contenedor de la sección-->
            <div class="card-body" style="height:333px; overflow: scroll;">
              <!-- Sección de comentario(s)-->
              <?php
              if($cardComentarios){
              foreach ($cardComentarios as $coment) { ?>
                <div class="row bg-light mb-4">
                  <!-- apodo del comentador -->
                  <div class="col texto" style="text-align: left;">
                    <h6 class="my-2">
                      <strong><?php echo $coment['apodo']; ?></strong>
                    </h6>
                    <label class="text-muted mb-2">
                      <small>
                        <?php echo  $coment['fecha']; ?>
                      </small>
                    </label><br>
                    <?php

                    $STARS = 5; //  total de estrellas

                    for ($i = 0; $i < $STARS; $i++) {
                      $color = "black";
                      if ($i < $coment['calif']) { // estrellas naranjas
                        $color = "orange";
                      } ?>
                      <!-- imprime las estrellas segun el color -->
                      <span class="fa fa-star" style=color:<?php echo $color ?>></span>
                    <?php
                    } ?>
                    <!-- comentario -->
                    <p class="pchiquito mt-3" style="text-align: justify;">
                      <?php echo $coment['comentario']; ?>
                    </p>
                  </div>
                </div>
              <?php }
            }else{ ?>
                  <p class="texto"><br><br>Todavía no tienes comentarios, regresa después</p>
              <?php
            }
            ?>
            </div>
            <br>

            <!-- Más comentarios- Modal -->
            <div class="form-group">

              <!--1. Botón para mostrar el modal-->
              <div class="border border-light p-1 mb-2">
                <div class="text-center texto">
                  <button class="btn btn-info mt-3" style="border-radius: 50px; width: 200px; height: 45px; text-align: center;" data-toggle="modal" data-target="#myModal">Ver comentarios</button>
                </div>
              </div>

              <!--2. Creación de la ventana del modal -->
              <div id="myModal" class="modal fade" role="dialog"">

                  <!--3. Permite ver el contenido del modal -->
                  <!-- <div class=" modal-dialog" style="height:450px; overflow: scroll"> -->
                  <div class="modal-dialog" role="document">

                <!--4. Aquí se coloca en condenido del modal-->
                <div class="modal-content">

                  <!--5. Cabecera del modal-->
                  <div class="modal-header texto">
                    <h4 class="modal-title"><strong>Comentarios.</strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!--6. Cuerpo del modal-->
                  <div class="modal-body">

                    <!--Contenedor de la sección-->
                    <div class="card-body">
                      <div class="container">

                         <!-- Sección de comentario(s)-->
                        <?php
                        if($cardComentarios){
                        foreach ($cardComentarios as $coment) { ?>
                          <div class="row bg-light mb-4">
                            <!-- apodo del comentador -->
                            <div class="col texto" style="text-align: left;">
                              <h6 class="my-2">
                                <strong><?php echo $coment['apodo']; ?></strong>
                              </h6>
                              <label class="text-muted mb-2">
                                <small>
                                  <?php echo  $coment['fecha']; ?>
                                </small>
                              </label><br>
                              <?php

                              $STARS = 5; //  total de estrellas

                              for ($i = 0; $i < $STARS; $i++) {
                                $color = "black";
                                if ($i < $coment['calif']) { // estrellas naranjas
                                  $color = "orange";
                                } ?>
                                <!-- imprime las estrellas segun el color -->
                                <span class="fa fa-star" style=color:<?php echo $color ?>></span>
                              <?php
                              } ?>
                              <!-- comentario -->
                              <p class="pchiquito mt-3" style="text-align: justify;">
                                <?php echo $coment['comentario']; ?>
                              </p>
                            </div>
                          </div>
                        <?php }
                          }else{ ?>
                                <p class="texto"><br><br>Todavía no tienes comentarios, regresa después</p>
                            <?php
                          }
                          ?>
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
                <h5 class="text m-0 font-weight-bold" style="text-align: center;">Información general</h5>
              </div>

              <div class="card-body">

                <!--Formulario-->
                <form>

                  <!--1ra Fila-->
                  <div class="form-row pb-3">

                    <!--Nickname-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Apodo</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" id="n_name" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['apodo']; ?>
                        </label>
                      </div>
                    </div>

                    <!--Nombre-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Nombre</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" id="puser" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['nom']; ?>
                        </label>
                      </div>
                    </div>
                  </div>


                  <!--Apellidos-->
                  <div class="form-row pb-3">

                    <!--Apellido materno-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Apellido paterno</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['app']; ?>
                        </label>
                      </div>
                    </div>

                    <!--Apellido materno-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Apellido Materno</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['apm']; ?>
                        </label>
                      </div>
                    </div>
                  </div>


                  <!--2da Fila-->
                  <div class="form-row pb-3">

                    <!--Correo-->
                    <div class="col">
                      <div class="form-group texto">
                        <label for=""><strong>Correo</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['correo']; ?>
                        </label>
                      </div>
                    </div>
                  </div>

                  <!--3ra Fila-->
                  <div class="form-row pb-3">

                    <!--Sexo-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Sexo</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['sexo']; ?>
                        </label>
                      </div>
                    </div>

                    <!--Fecha de nacimiento-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Fecha de nacimiento</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['fecnac']; ?>
                        </label>
                      </div>
                    </div>
                  </div>

                  <!--4ta Fila-->
                  <div class="form-row pb-3">

                    <!--Área-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Área</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style=" border-bottom-color:#ada2a2;">
                          <?php




                          echo $user['arnom']; ?>
                        </label>
                      </div>
                    </div>

                    <!--Especialidad-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Especialidad</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['esp']; ?>
                        </label>
                      </div>
                    </div>
                  </div>

                  <!--5ta Fila-->

                  <div class="form-row pb-3">
                    <!--Estado-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Estado</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" id="estado" value="" readonly style=" border-bottom-color:#ada2a2;">
                          <?php echo $user['estado']; ?>
                        </label>
                      </div>
                    </div>

                    <!--Ciudad-->
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group texto">
                        <label for=""><strong>Ciudad</strong></label>
                        <br>
                        <label class="form-control-plaintext labelchiquita" type="text" id="ciudad" value="" readonly style="border-bottom-color:#ada2a2;">
                          <?php echo $user['ciudad']; ?>
                        </label>
                      </div>
                    </div>
                  </div>

                  <!--6ta Fila-->
                  <div class="form-row">

                    <!--Redes sociales-->
                    <div class="col">
                      <center>
                        <div class="form-group texto">
                          <label class="form-control-plaintext labelchiquita" type="text" id="facebook" value="" readonly style="border-bottom-color:#ada2a2;">
                            <a style="color: black;" target="_blank" href="<?php echo $user['fbref']; ?>"><span class="fab fa-facebook-square" style="font-size: 30px;">&nbsp;&nbsp;</span><u>Da click para contactar por facebook</u></a></label>
                          <br>
                        </div>
                      </center>
                    </div>
                  </div>

                  <!--7ma Fila-->
                  <div class="form-row">

                    <!--Descripción-->
                    <div class="col">
                      <div class="form-group">
                        <label class="texto" for=""><strong>Descripción</strong></label>
                        <p class="des" style="text-align: justify;" type="text">
                          <?php echo $user['descripcion']; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <br>

                  <!--Botón - Guardar cambios-->
                  <div class="form-row">
                    <div class="col texto section1 text-center py-2">
                      <button class="btn text-white" id="editarPerfil" style="background: #23B439; border-radius: 40px; width: 180px; height: 45px; text-align: center;" role="button" type="button"> <a href="profile_editable.html" class="text-white" style="text-decoration: none;">Editar perfil</a></button>
                    </div>

                    <!--Botón - Cerrar sesión-->
                    <div class="col texto section1 text-center py-2">
                      <button class="btn text-white" id="cerrarSesion" style="background: #E9501A; border-radius: 40px; width: 180px; height: 45px; text-align: center;" type="submit">Cerrar sesión</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--FIN DE LA COLUMNA LADO DERECHO-->
    </div>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    if ($(window).width() > 992) {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 40) {
          $('#navbar_top').addClass("fixed-top");
          $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        } else {
          $('#navbar_top').removeClass("fixed-top");
          $('body').css('padding-top', '0');
        }
      });
    } // end if
  </script>

  <!--Nos redirecciona a la página = Botón Cerrar sesión-->
  <script type="text/javascript">
    $(document).ready(function() {
      $("#cerrarSesion").click(function() {
        event.preventDefault();
        $(location).attr('href', 'assets/php/logout.php');
      });
    });
  </script>

  <!--Nos redirecciona a la página = Botón Edita perfil-->
  <script type="text/javascript">
    $(document).ready(function() {
      $("#editarPerfil").click(function() {
        event.preventDefault();
        $(location).attr('href', 'profile_editable.php');
      });
    });
  </script>

</body>
<footer class="text-center text-lg-start text-white" style="background: #000000;">
  <!-- Copyright -->
  <div class="text-center p-3 texto">
    © 2021 Copyright:
    <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
  </div>
</footer>

</html>
