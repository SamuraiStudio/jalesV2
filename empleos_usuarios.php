<!--  SITIO PUBLICACION DE EMPLEO DISPONIBLES, EL USUARIO REGISTRADO PUEDE ACCEDER A ELLOS SE LE DA UNA Descripción DETALLADA -->
<html>

  <!--  ENCABEZADO  -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png"><!--Icono del navegador-->
      <title>Ofertas de trabajo - Usuario</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <!--Iconos - Puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!--link rel="stylesheet" href="assets/css/styles.css"-->
  </head>

  <!-- CUERPO -->
  <body style="background-color: #E6E1E1;">

  <?php include "_header.php"; echo?>

    <!--------------------------------------------------------------------- Publicaciones - Usuarios  -------------------------------------------------------->

    <div id="fondo"class="container my-4" style="background-image: url(assets/img/lines/linea_negra_p.png); "><br> <!-- Div principal - Inicio -->

      <!-- Título principal -->
      <div class="container texto py-2 mg-1 texto" style="background: #F0F0F0;"><br>
        <h2 class="text-dark" style="text-align: center;"><strong>Empleos disponibles</strong></h2>
      </div>

      <!-- Div espaciador -->
      <div class="py-2"></div>

      <!-- Inicio - Div Texto -->
      <div class="container texto">

        <!-- Botón para abrir el modal (Nos permitirá visualizar las categorías) -->
        <div class="row p-3"> <!--justify-content-center-->
          <button type="button" class="btn btn-outline-secondary btn-lg" style="border-radius: 50px; text-align: center;" data-toggle="modal" data-target="#myModal">Categorías</button>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Contenido del modal -->
            <div class="modal-content">

              <!-- Encabezado del modal -->
              <div class="modal-header">

                <!-- Título -->
                <h4 class="modal-title" style="text-align: center;">Categorías</h4>

                <!-- Botón que crea la famosa "X", para cerrar la ventana del modal -->
                <button id="cierra" type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Inicio - Cuerpo del modal -->
              <div class="modal-body">

                <!-- Inicio - Div de las filas y columas -->
                <div class="container">

                  <!-- Inicio - 1ra fila -->
                  <div class="row">

                    <!-- Botón categoría - Administración y traducción -->
                    <div class="col section1 text-center">
                      <button id="bussiness" class="rounded-circle btn section1 text-center" style="background: #44745E; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="document-text"></ion-icon></button><br>
                      <label class="mt-2" style="text-align: center;"><small>Administración <br> y traducción</small></label>
                    </div>

                    <!-- Botón categoría - Diseño y áreas de creativadad -->
                    <div class="col section1 text-center">
                      <button id="diseno" class="rounded-circle btn section1 text-center" style="background: #D49623; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="color-palette"></button><br>
                      <label class="mt-2" style="text-align: center;"><small>Diseño y áreas <br> creativas</small></label>
                    </div>
                  </div> <!-- Fin - 1ra fila -->
                  <br>

                  <!-- Inicio - 2da fila -->
                  <div class="row">

                    <!-- Botón categoría - Ingeniería en TIC´s -->
                    <div class="col section1 text-center">
                      <button id="tics" class="rounded-circle btn" style="background: #AAA7A5; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="code-working"></ion-icon></button><br>
                      <label class="mt-2" style="text-align: center;"><small>IT</small></label>
                    </div>

                    <!--2da columna-->
                    <div class="col section1 text-center">
                      <button id="ventas" class="rounded-circle btn section1 text-center" style="background: #6F3B17; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="pricetags"></ion-icon></button><br>
                      <label class="mt-2" style="text-align: center;"><small>Marketing y ventas</small></label>
                    </div>
                  </div> <!--Fin - 2ra fila-->
                  <br>

                  <!--Inicio - 3ra fila-->
                  <div class="row">

                    <!--1ra columna-->
                    <div class="col section1 text-center">
                      <button id="redaccion" class="rounded-circle btn" style="background: #B62C21; width: 87px; height: 87px;" type="button" name="button"><ion-icon name="create"></ion-icon></button><br>
                      <label class="mt-2" style="text-align: center;"><small>Redacción</small></label>
                    </div>
                  </div> <!-- Fin - 3ra fila-->
                </div> <!-- Fin - Div de las filas y columas -->
              </div> <!-- Fin - Cuerpo del modal -->
            </div> <!-- Fin - Contenido del modal -->
          </div> <!-- Fin - Modal dialog -->
        </div> <!-- Fin del modal -->
      </div><!-- Fin - Div Texto -->
      <br>

      <div class="card shadow container bg-light p-4"> <br> <!--Fila 1 - Inicio. Publicación 1-->
        <div class="row">

          <!--Columna lado izquierdo-->
          <div class="col-md-4 col-lg-4 item align-self-center texto">
            <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo1.jpg">
            <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

            <!--Botones-->
            <div class="row pt-5"> <!--Editar-->
              <div class="col align-self-center section1 text-center">
                <button class="btn text-white" id="meInteresa" type="button" style="background: #23B439; border-radius: 50px; width: 160px; height: 45px;">Me interesa</button>
              </div>
            </div>
          </div>

          <!--Columna lado derecho-->
          <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

              <!--Fila del empleador-->
              <div class="row">
                <div class="col">
                  <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nike</label>
                </div>
              </div>
              <br>

              <!--Fila de área y especialidad-->
              <div class="row">
                <div class="col pb-2">
                  <label class="texto"for=""><strong>Área</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Administración</label>
                </div>
                <div class="col pb-2">
                  <label class="texto"for=""><strong>Especialidad</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Ventas</label>
                </div>
              </div><br>

              <!--Jornada y sueldo-->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Jornada</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Completa</label>
                </div>
                <div class="col">
                  <label class="texto" for=""><strong>Salario</strong></label>
                  <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">$5000 al mes</label>
                </div>
              </div><br>

              <!--Fila de Ubicación-->
              <div class="row pb-3">
                <div class="col">
                  <label class="texto" for=""><strong>Ubicación</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                </div>
              </div>

              <!--Fila de descripcion-->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Estamos buscamos al mejor talento para desempeñarse como Vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                </div>
              </div><br>

              <!--Fila de Requisitos-->
              <div class="row">
                <div class="col">
                  <label class="texto" for=""><strong>Requisitos del personal</strong></label>
                  <textarea class="form-control-plaintext subtitulo" type="text" value="" style="text-align: justify; height:100px;" readonly>Edad: de 25 a 50 años, género indistinto, escolaridad bachillerato (mínimo).Que tenga experiencia alrededor de 2 años en instituciones financieras haciendo promoción en campo.
                  </textarea>
                </div>
              </div>
            </div>
          </div>
        </div><br><!--Fila 1 - Fin. Publicación 1-->

        <div class="card shadow container bg-light p-4"> <br> <!--Fila 2 - Inicio. Publicación 2-->
          <div class="row">

            <!--Columna lado izquierdo-->
            <div class="col-md-4 col-lg-4 item align-self-center texto">
              <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo2.jpg">
              <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

              <!--Botones-->
              <div class="row pt-5"> <!--Editar-->
                <div class="col align-self-center section1 text-center">
                  <button class="btn text-white" id="meInteresa" type="button" style="background: #23B439; border-radius: 50px; width: 160px; height: 45px;">Me interesa</button>
                </div>
              </div>
            </div>

            <!--Columna lado derecho-->
            <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

                <!--Fila del empleador-->
                <div class="row">
                  <div class="col">
                    <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nike</label>
                  </div>
                </div>
                <br>

                <!--Fila de área y especialidad-->
                <div class="row">
                  <div class="col pb-2">
                    <label class="texto"for=""><strong>Área</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Administración</label>
                  </div>
                  <div class="col pb-2">
                    <label class="texto"for=""><strong>Especialidad</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Ventas</label>
                  </div>
                </div><br>

                <!--Jornada y sueldo-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Jornada</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Completa</label>
                  </div>
                  <div class="col">
                    <label class="texto" for=""><strong>Salario</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">$5000 al mes</label>
                  </div>
                </div><br>

                <!--Fila de Ubicación-->
                <div class="row pb-3">
                  <div class="col">
                    <label class="texto" for=""><strong>Ubicación</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                  </div>
                </div>

                <!--Fila de descripcion-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="text-align: justify; height:100px;">Estamos buscamos al mejor talento para desempeñarse como Vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                  </div>
                </div><br>

                <!--Fila de Requisitos-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Requisitos del personal</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="height: 75px; text-align: justify; height:100px;">Edad: de 25 a 50 años, género indistinto, escolaridad bachillerato (mínimo).Que tenga experiencia alrededor de 2 años en instituciones financieras haciendo promoción en campo.
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
          </div><br><!-- Fila 2 - Fin. Publicación 2 -->

          <div class="card shadow container bg-light p-4"> <br> <!--Fila 3 - Inicio. Publicación 3 -->
            <div class="row">

              <!--Columna lado izquierdo-->
              <div class="col-md-4 col-lg-4 item align-self-center texto">
                <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo3.jpg">
                <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

                <!--Botones-->
                <div class="row pt-5"> <!--Editar-->
                  <div class="col align-self-center section1 text-center">
                    <button class="btn text-white" id="meInteresa" type="button" style="background: #23B439; border-radius: 50px; width: 160px; height: 45px;">Me interesa</button>
                  </div>
                </div>
              </div>

              <!--Columna lado derecho-->
              <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

                <!--Fila del empleador-->
                <div class="row">
                  <div class="col">
                    <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nike</label>
                  </div>
                </div>
                <br>

                <!--Fila de área y especialidad-->
                <div class="row">
                  <div class="col pb-2">
                    <label class="texto"for=""><strong>Área</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Administración</label>
                  </div>
                  <div class="col pb-2">
                    <label class="texto"for=""><strong>Especialidad</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Ventas</label>
                  </div>
                </div><br>

                <!--Jornada y sueldo-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Jornada</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" style="border-bottom-color:#ada2a2; text-align: justify;" readonly >Completa</label>
                  </div>
                  <div class="col">
                    <label class="texto" for=""><strong>Salario</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" style="border-bottom-color:#ada2a2; text-align: justify;" readonly>$5000 al mes</label>
                  </div>
                </div><br>

                <!--Fila de Ubicación-->
                <div class="row pb-3">
                  <div class="col">
                    <label class="texto" for=""><strong>Ubicación</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" style="text-align: justify; height:100px;" readonly>Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                  </div>
                </div>

                <!--Fila de descripcion-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" style="text-align: justify; height:100px;" readonly>Estamos buscamos al mejor talento para desempeñarse como Vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                  </div>
                </div><br>

                <!--Fila de Requisitos-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Requisitos del personal</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="height: 75px; text-align: justify; height:100px;">Edad: de 25 a 50 años, género indistinto, escolaridad bachillerato (mínimo).Que tenga experiencia alrededor de 2 años en instituciones financieras haciendo promoción en campo.
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
          </div><br><!--Fila 3 - Fin. Publicación 3-->
    </div>  <!-- Div principal - Fin -->
    <br>

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

    <!-- Script - Barra de navegación -->
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

  </body>
</html>
