<?php
  require('assets/php/Consultas.php');
  $consultas = new Consultas();
  $areas = $consultas->GetAreas();
  $trabajos = $consultas->getAllJobs();
 ?>
<!--  SITIO - EMPLEOS DISPONIBLES PARA MIRONES. EL USUARIO PUEDE VISUALIZAR SIN MUCHOS DETALLES LOS EMPLEOS DISPONIBLES PUBLICADOS Y EN CASO DE POSTULACIÓN LA REDIRECCIONARA AL LOGIN-->
<html>
  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png"><!--Icono del navegador-->
      <title>Ofertas de trabajo</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/styles.css"><!--Estilo de la fuente e íconos (color y tamaño)-->
      <!--Iconos - Puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script> <!--Íconos-->
  </head>

  <!-- CUERPO -->
  <body style="background-color: #E6E1E1;">
    <!-----------------------------------------------MENÚ / BARRA DE NAVEGACIÓN ----------------------------------------------->
    <header>

      <!-- Encabezado (color + logo) -->
      <div class="py-2" style="background: #FFFFFF;">
        <div class="container">
          <center><a href="empleos_publico.php"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
        </div>
      </div>

      <!--------------------------------------------------- Barra de navegación -------------------------------------------------->
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <div class="container">
          <span><a href="empleos_publico.php"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid" style="width: 150px; height: 65px;"></a></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

          <div class="collapse navbar-collapse texto" id="main_nav">
              <ul class="navbar-nav mr-auto">
                <!--Buscador-->

              </ul>
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="register_user.php">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>
              </ul>
          </div>
        </div>
      </nav>
    </header>

    <!---------------------------------------------------- Publicaciones - Usuarios ---------------------------------------------------->

      <div id="fondo" class="container my-4" style="background-image: url(assets/img/lines/linea_negra_p.png); "><br>

        <!--Título principal-->
        <div class="container texto py-2 mg-1 texto" style="background: #F0F0F0;"><br>
          <h2 class="text-dark" style="text-align: center;"><strong>Empleos disponibles</strong></h2>
        </div>

        <!--Div espaciador-->
        <div class="py-2"></div>

        <!--Inicio - Div Texto-->
        <div class="container texto">

          <!--Botón para abrir el modal (Nos permitirá visualizar las CATEGORÍAS)-->
          <div class="row p-3"> <!--justify-content-center-->
            <table>
                <tr>
                    <td style=""><input class="form-control mr-sm-2" type="search" placeholder="Busca un empleo" aria-label="Search" style="border-radius: 50px;"></td>

                      <td> <button type="button" class="btn btn-secondary btn-lg" style="border-radius: 50px; text-align: center;" data-toggle="modal" data-target="#myModal">Categorías</button></td>
                </tr>
            </table>
          </div>

          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Contenido del modal -->
              <div class="modal-content">

                <!--Encabezado del modal-->
                <div class="modal-header">

                  <!--Título-->
                  <h4 class="modal-title" style="text-align: center;">Categorías</h4>

                  <!--Botón que crea la famosa "X", para cerrar la ventana del modal-->
                  <button id="cierra" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                  <!--Inicio - Cuerpo del modal-->
                  <div class="modal-body">

                    <!--Inicio - Div de las filas y columas-->
                    <div class="container">
                      <?php foreach ($areas as $a) {  ?>
                      <!--Inicio - 1ra fila-->
                      <div class="row">

                        <!-- Botón - Administración y traducción -->
                        <div class="col section1 text-center">
                          <input type="checkbox" id="busqueda" value="<?php echo $a['nombre']; ?>"><?php echo $a['nombre']; ?></input>
                        </div>
                      </div> <!-- Fin - 1ra fila -->
                    <?php } ?>
                      <br>
                    </div> <!-- Inicio - Div de las filas y columas -->
                  </div> <!-- Fin - Cuerpo del modal -->
                </div> <!-- Fin - Contenido del modal -->
              </div> <!-- Fin - Modal dialog -->
            </div> <!-- Fin del modal -->
          </div><!-- Fin - Div Texto -->
          <br>

          <!-- Publicación 1 - Inicio. -->
          <?php foreach ($trabajos as $trabajo) { ?>
          <div class="card shadow container bg-light p-4">
            <br>
            <div class="row">
              <!-- Columna lado izquierdo (Foto + botón) -->
              <div class="col-md-4 col-lg-4 item align-self-center texto">
                <!-- Foto del empleo -->
                <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($trabajo['data']); ?>">
                <!-- Nombre del empleo -->
                <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong></strong></label>
                <!-- Botón "Me interesa" -->
                <div class="row py-3">
                  <div class="col align-self-center section1 text-center">
                    <button class="btn text-white" id="meInteresa" style="background: #23B439; border-radius: 50px; width: 160px; height: 45px;" data-toggle="modal" data-target="#myModal2">Me interesa</button>
                  </div>
                </div>
              </div>
              <!--Modal-->
              <div id="myModal2" class="modal fade" role="dialog">

                  <!--3. Permite ver el contenido del modal -->
                  <div class="modal-dialog" style="height:450px;">

                    <!--4. Aquí se coloca en condenido del modal-->
                    <div class="modal-content">

                      <!--5. Cabecera del modal-->
                      <div class="modal-header texto">
                        <h5 class="modal-title"><strong>Recuerda</strong></h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!--6. Cuerpo del modal-->
                      <div class="modal-body">

                        <!--Contenedor de la sección-->
                        <!--div class="card-body"-->
                          <div class="container">

                            <!--Comentario 1-->
                            <div class="row bg-light">
                              <!--Nombre de quién realiza el comentario-->
                                <div class=" texto" style="text-align: justify;">
                                  <p class="pchiquito p-3" style="text-align: justify;">Para poder acceder a más información es necesario <strong>Iniciar sesión</strong> o <strong>Registrarse</strong> en caso de no pertenecer a "El jale"</p>
                                  <br>
                                </div>

                                  <!--Botón para iniciar sesión-->
                                  <div class="col-sm-6">
                                    <button href="login.php" class="btn btn-block texto text-white" role="button" id="inicia" style="background: #23B4A0; border-radius: 50px;text-align: center; height: 45px;">Iniciar Sesión</button>

                                    <hr>
                                  </div>
                                  <!--Botón para registrarse-->
                                  <div class="col-sm-6">
                                      <button href="register_user.php" class="btn btn-block text-white texto" role="button" id="registra" style="background: #EF5A10;border-radius: 50px; text-align: center; height: 45px;">Registrarse</button>
                                    <hr>
                                  </div>

                            </div>
                          </div>
                        <!--/div-->
                      </div>
                    </div>
                  </div>
              </div>

              <!-- Columna lado derecho -->
              <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

                  <!-- Fila - Nombre del usuario o empresa -->
                  <div class="row">
                    <div class="col">
                      <label  class="texto" for=""><strong>Empresa</strong></label>
                      <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify;"><?php echo $trabajo['empleador']; ?></label>
                    </div>
                  </div>
                  <br>

                  <!-- Fila - Descripcion del empleo -->
                  <div class="row">
                    <div class="col">
                      <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;"><?php echo $trabajo['descripcion']; ?></textarea>
                    </div>
                  </div>
                  <br>

                  <!-- Fila - Ubicación -->
                  <div class="row">
                    <div class="col">
                      <label class="texto" for=""><strong>Ubicación</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;"><?php echo  $trabajo['ubi']; ?></textarea>
                    </div>
                  </div>
              </div>
            </div>
          <br>
          </div><!-- Publicación 1 - Fin. -->
        <?php } ?>
        <br><br>
      </div>
    </div>

    <!--PIE DE PÁGINA-->
    <footer class="text-center text-lg-start text-white" style="background: #000000;">
        <!-- Copyright -->
        <div class="text-center p-3 texto" >
          © 2021 Copyright:
          <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
        </div>
    </footer>

    <!--Scripts-->
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
      $(document).ready(function(){
        $("#inicia").click(function(){
        event.preventDefault();
        $(location).attr('href', 'login.php');
      });

      $("#registra").click(function(){
        event.preventDefault();
        $(location).attr('href', 'register_user.php');
        });
      });
    </script>

  </body>
</html>
