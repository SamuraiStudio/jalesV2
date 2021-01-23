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
              <ul class="navbar-nav ml-auto">

                <!--Buscador-->
                <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Busca un empleo" aria-label="Search"  style= "border-radius: 50px;">
                      <button class="btn text-white btn-lg my-2 my-sm-0" type="submit" style="background: #95140A;  border-radius: 50px;">Buscar</button>
                  </form>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
            <button type="button" class="btn btn-outline-secondary btn-lg" style="border-radius: 50px; text-align: center;" data-toggle="modal" data-target="#myModal">Categorías</button>
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

                      <!--Inicio - 1ra fila-->
                      <div class="row">

                        <!-- Botón - Administración y traducción -->
                        <div class="col section1 text-center">
                          <button id="bussiness" class="rounded-circle btn section1 text-center" style="background: #44745E; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="document-text"></ion-icon>
                          </button>
                          <br><label class="mt-2" style="text-align: center;"><small>Administración <br> y traducción</small></label>
                        </div>

                        <!-- Botón - Diseño y áreas creativas -->
                        <div class="col section1 text-center">
                          <button id="diseno" class="rounded-circle btn section1 text-center" style="background: #D49623; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="color-palette"></button>
                          <br><label class="mt-2" style="text-align: center;"><small>Diseño y áreas <br> creativas</small></label>
                        </div>
                      </div> <!-- Fin - 1ra fila -->
                      <br>

                      <!-- Inicio - 2da fila -->
                      <div class="row">

                        <!-- Botón - Ingeniería en Tic´s -->
                        <div class="col section1 text-center">
                          <button id="tics" class="rounded-circle btn" style="background: #AAA7A5; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="code-working"></ion-icon></button>
                          <br><label class="mt-2" style="text-align: center;"><small>IT</small></label>
                        </div>

                        <!-- Botón - Marketing y ventas -->
                        <div class="col section1 text-center">
                          <button id="ventas" class="rounded-circle btn section1 text-center" style="background: #6F3B17; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="pricetags"></ion-icon></button>
                          <br><label class="mt-2" style="text-align: center;"><small>Marketing y ventas</small></label>
                        </div>
                      </div> <!-- Fin - 2ra fila -->
                      <br>

                      <!-- Inicio - 3ra fila -->
                      <div class="row">

                        <!-- Botón - Redacción -->
                        <div class="col section1 text-center">
                          <button id="redaccion" class="rounded-circle btn" style="background: #B62C21; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="create"></ion-icon></button>
                          <br><label class="mt-2" style="text-align: center;"><small>Redacción</small></label>
                        </div>
                      </div> <!-- Fin - 3ra fila -->
                    </div> <!-- Inicio - Div de las filas y columas -->
                  </div> <!-- Fin - Cuerpo del modal -->
                </div> <!-- Fin - Contenido del modal -->
              </div> <!-- Fin - Modal dialog -->
            </div> <!-- Fin del modal -->
          </div><!-- Fin - Div Texto -->
          <br>

          <!-- Publicación 1 - Inicio. -->
          <div class="card shadow container bg-light p-4">
            <br>
            <div class="row">

              <!-- Columna lado izquierdo (Foto + botón) -->
              <div class="col-md-4 col-lg-4 item align-self-center texto">

                <!-- Foto del empleo -->
                <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo1.jpg">
                <!-- Nombre del empleo -->
                <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

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
                                  <!--Botón para regresar-->
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
                      <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                      <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify;">Nike</label>
                    </div>
                  </div>
                  <br>

                  <!-- Fila - Descripcion del empleo -->
                  <div class="row">
                    <div class="col">
                      <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Estamos buscamos al mejor talento para desempeñarse como vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                    </div>
                  </div>
                  <br>

                  <!-- Fila - Ubicación -->
                  <div class="row">
                    <div class="col">
                      <label class="texto" for=""><strong>Ubicación</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                    </div>
                  </div>
              </div>
            </div>
          <br>
        </div><!-- Publicación 1 - Fin. -->
        <br><br>

        <!-- Publicación 2 - Inicio. -->
        <div class="card shadow container bg-light p-4">
          <br>
          <div class="row">

            <!-- Columna lado izquierdo (Foto + botón) -->
            <div class="col-md-4 col-lg-4 item align-self-center texto">

              <!-- Foto del empleo -->
              <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo3.jpg">
              <!-- Nombre del empleo -->
              <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

              <!-- Botón "Me interesa" -->
              <div class="row py-3">
                <div class="col align-self-center section1 text-center">
                  <button class="btn text-white" id="meInteresa" type="button" style="background: #23B439; border-radius: 50px; width: 160px; height: 45px;"  data-toggle="modal" data-target="#myModal2">Me interesa</button>
                </div>
              </div>
            </div>

            <!-- Columna lado derecho -->
            <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

              <!-- Fila - Nombre del usuario o empresa -->
              <div class="row">
                <div class="col">
                  <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify;">Nike</label>
                </div>
              </div>
              <br>

              <!-- Fila - Descripcion del empleo -->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Estamos buscamos al mejor talento para desempeñarse como vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                </div>
              </div>
              <br>

              <!-- Fila - Ubicación -->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Ubicación</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div> <!-- Publicación 2 - Fin. -->
        <br><br>

        <!-- Publicación 3 - Inicio. -->
        <div class="card shadow container bg-light p-4">
          <br>
          <div class="row">

            <!-- Columna lado izquierdo (Foto + botón) -->
            <div class="col-md-4 col-lg-4 item align-self-center texto">

              <!-- Foto del empleo -->
              <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo2.jpg">
              <!-- Nombre del empleo -->
              <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

              <!-- Botón "Me interesa" -->
              <div class="row py-3">
                <div class="col align-self-center section1 text-center">
                  <button class="btn text-white" id="meInteresa" type="button" style="background: #23B439; border-radius: 50px; width: 160px; height: 45px;"  data-toggle="modal" data-target="#myModal2">Me interesa</button>
                </div>
              </div>
            </div>

            <!-- Columna lado derecho -->
            <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

              <!-- Fila - Nombre del usuario o empresa -->
              <div class="row">
                <div class="col">
                  <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify;">Nike</label>
                </div>
              </div>
              <br>

              <!-- Fila - Descripcion del empleo -->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Estamos buscamos al mejor talento para desempeñarse como vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                </div>
              </div>
              <br>

              <!-- Fila - Ubicación -->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Ubicación</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div> <!-- Publicación 3 - Fin. -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script> <!--Íconos-->
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

    <!--Cambia los colores de los fondos-->
    <script>
        $(document).ready(() =>{

          /*  Categoría: Administración y traducción */
          $("#bussiness").click(function() {
            event.preventDefault();
            // $("body").css('background-color', '#2D5543');
            // $("#navbar_top").css('background-color', '#2D5543');
            $("#fondo").css('background-image', 'url(assets/img/lines/linea_verde_p.png)');
            $("#cierra").click();
          });

          /*  Diseño y áreas creativas  */
          $("#diseno").click(function() {
            event.preventDefault();
            // $("body").css('background-color', '#E4AF4D');
            // $("#navbar_top").css('background-color', '#E4AF4D');
            $("#fondo").css('background-image', 'url(assets/img/lines/linea_dorada_p.png)');
            $("#cierra").click();
          });

          /*  Ingeniría en TIC´s  */
          $("#tics").click(function() {
            event.preventDefault();
            // $("body").css('background-color', '#D5D3D1');
            // $("#navbar_top").css('background-color', '#D5D3D1');
            $("#fondo").css('background-image', 'url(assets/img/lines/linea_gris_p.png)');
            $("#cierra").click();
          });

          /*  Marketing y ventas  */
          $("#ventas").click(function() {
            event.preventDefault();
            // $("body").css('background-color', '#6F3B17');
            // $("#navbar_top").css('background-color', '#6F3B17');
            $("#fondo").css('background-image', 'url(assets/img/lines/linea_cafe_p.png)');
            $("#cierra").click();
          });

          /*  Redacción  */
          $("#redaccion").click(function() {
            event.preventDefault();
            // $("body").css('background-color', '#B62C21');
            // $("#navbar_top").css('background-color', '#B62C21');
            $("#fondo").css('background-image', 'url(assets/img/lines/linea_roja_p.png)');
            $("#cierra").click();
          });
        });
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
