
<!--  SITIO - PUBLICACIONES. EL USUARIO PUEDE VISUALIZAR LAS PUBLICACIONES QUE HA REALIZADO. TAMBIÉN PODRÁ EDITAR DICHO EMPLEO O VISUALIZAR AQUELLOS USUARIOS INTERESADOS EN SU PUBLICACIÓN  -->
<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Mis publicaciones</title>
      <!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" /> Fuente Raleway-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas + puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
  <header>
    <div class="py-2" style="background: #FFFFFF;">
      <div class="container">
        <!--Logo del sitio-->
        <center><a href="empleos_usuarios.php"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
      </div>
    </div>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" style="background: #080000;">
      <div class="container">
        <span><a href="empleos_usuarios.php"><img src="assets/img/Titulo/jale_b_sp_1.png" class="img-fluid" style="width: 150px; height: 65px;"></a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse texto" id="main_nav">
          <!--Botones de navegación (Foro, buscar y generar trabajo)-->
            <ul class="navbar-nav ml-auto">

              <!--Buscador   -->
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Busca un empleo" aria-label="Search"  style= "border-radius: 50px;">
                    <button class="btn text-white btn-lg my-2 my-sm-0" type="submit" style="background: #95140A;  border-radius: 50px;">Buscar</button>
                </form>
              </li>

              <!-- Espaciado -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <li class="nav-item"><a class="nav-link" href="empleos_usuarios.php">Buscar trabajo</a></li>
              <li class="nav-item"><a class="nav-link" href="register_empleo.php">Generar Trabajo</a></li>
              <li class="nav-item"><a class="nav-link" href="https://testjales.samuraistudio.com.mx/" target="_blank">Foro</a></li>
              <li class="nav-item"><a class="nav-link" href="publicaciones_user.php">Mis publicaciones</a></li>
              <li class="nav-item"><a class="nav-link" href="profile_user.php">Mi perfil</a></li>
              <li class="nav-item"><a class="nav-link" href="empleos_publico.php"><span class="fas fa-door-open" style="font-size: 20px;"></span></a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- CUERPO -->
  <body style="background: #E6E1E1;"> <br>

      <!---------------------------------------------------- PUBLICACIONES -------------------------------------------------------->

      <div class="container" style="background: #FFFFFF;"><br>

          <!--Título principal-->
          <div class="container texto py-2 mg-1 texto" style="background: #F0F0F0;"><br>
            <h2 class="text-dark" style="text-align: center;"><strong> Tus publicaciones </strong></h2>
          </div>

          <!--Div espaciador-->
          <div class="py-2"></div>

          <!--Fila 1 - Inicio. Publicación 1-->
          <div class="card shadow container bg-light p-4">
            <br>
            <div class="row">

              <!--Columna lado izquierdo-->
              <div class="col-md-4 col-lg-4 item align-self-center texto">
                <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo1.jpg">
                <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

                <!--Botones-->

                <div class="row pt-5">
                  <!--Editar-->
                  <div class="col align-self-center section1 text-center">
                    <button class="btn text-white" id="editarP" type="button" style="background: #EF5A10; border-radius: 50px; width: 120px; height: 45px;">Editar</button>
                  </div>

                  <!--Interesados-->
                  <div class="col align-self-center section1 text-center">
                    <button class="btn text-white" id="interesados" type="button" style="background: #23B439;  border-radius: 50px; width: 120px; height: 45px;">Interesados</button>
                  </div>
                </div>
              </div>

              <!--Columna lado derecho-->
              <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

                  <!--Fila del empleador-->
                  <div class="row">
                    <div class="col">
                      <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                      <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nikew</label>
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
                  </div>
                  <br>

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
                  </div>
                  <br>

                  <!--Fila de Ubicación-->
                  <div class="row pb-3">
                    <div class="col">
                      <label class="texto" for=""><strong>Ubicación</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="height: 100px; text-align: justify;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                    </div>
                  </div>

                  <!--Fila de descripcion-->
                  <div class="row">
                    <div class="col">
                      <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" style="height: 100px; text-align: justify;" readonly>Estamos buscamos al mejor talento para desempeñarse como Vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                    </div>
                  </div>
                  <br>

                  <!--Fila de Requisitos-->
                  <div class="row">
                    <div class="col">
                      <label class="texto" for=""><strong>Requisitos del personal</strong></label>
                      <textarea class="form-control-plaintext subtitulo" type="text" value="" style="height: 100px; text-align: justify;" readonly>Edad: de 25 a 50 años, género indistinto, escolaridad bachillerato (mínimo).Que tenga experiencia alrededor de 2 años en instituciones financieras haciendo promoción en campo.
                      </textarea>
                    </div>
                  </div>
              </div>
            </div>
          <br>
        </div><!--Fila 1 - Fin. Publicación 1-->
        <br>

        <!--Fila 2- Inicio. Publicación 1-->
        <div class="card shadow container bg-light p-4">
          <br>
          <div class="row">

            <!--Columna lado izquierdo-->
            <div class="col-md-4 col-lg-4 item align-self-center texto">
              <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="assets/img/empleos/empleo3.jpg">
              <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong>Nombre del empleo</strong></label>

              <!--Botones-->

              <div class="row pt-5">
                <!--Editar-->
                <div class="col align-self-center section1 text-center">
                  <button class="btn text-white" id="editarP" type="button" style="background: #EF5A10; border-radius: 50px; width: 120px; height: 45px;">Editar</button>
                </div>

                <!--Interesados-->
                <div class="col align-self-center section1 text-center">
                  <button class="btn text-white" id="interesados" type="button" style="background: #23B439;  border-radius: 50px; width: 120px; height: 45px;">Interesados</button>
                </div>
              </div>
            </div>

            <!--Columna lado derecho-->
            <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

                <!--Fila del empleador-->
                <div class="row">
                  <div class="col">
                    <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Nikew</label>
                  </div>
                </div>
                <br>

                <!--Fila de área y especialidad-->
                <div class="row">
                  <div class="col py-2">
                    <label class="texto"for=""><strong>Área</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Administración</label>
                  </div>
                  <div class="col py-2">
                    <label class="texto"for=""><strong>Especialidad</strong></label>
                    <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">Ventas</label>
                  </div>
                </div>
                <br>

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
                </div>
                <br>

                <!--Fila de Ubicación-->
                <div class="row pb-3">
                  <div class="col">
                    <label class="texto" for=""><strong>Ubicación</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" readonly style="height: 100px; text-align: justify;">Autopista México-Puebla Km. 115 Adelante De Planta Armadora Volkswagen, 72680 San Francisco Ocotlán, Pue.</textarea>
                  </div>
                </div>

                <!--Fila de descripcion-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" style=" height: 100px; text-align: justify;" readonly>Estamos buscamos al mejor talento para desempeñarse como Vendedores/as en nuestra tienda de Nike Factory Store Puebla.</textarea>
                  </div>
                </div>
                <br>

                <!--Fila de Requisitos-->
                <div class="row">
                  <div class="col">
                    <label class="texto" for=""><strong>Requisitos del personal</strong></label>
                    <textarea class="form-control-plaintext subtitulo" type="text" value="" style="height: 100px; text-align: justify;" readonly>Edad: de 25 a 50 años, género indistinto, escolaridad bachillerato (mínimo).Que tenga experiencia alrededor de 2 años en instituciones financieras haciendo promoción en campo.
                    </textarea>
                  </div>
                </div>
            </div>
          </div>
      </div><br><!--Fila 2 - Fin. Publicación 1-->
      </div>
      <br>

      <!--PIE DE PÁGINA-->
      <footer class="text-center text-lg-start text-white" style="background: #080000;">
          <!-- Copyright -->
          <div class="text-center p-3 texto" >
            © 2021 Copyright:
            <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
          </div>
      </footer>

    <!--Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
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

    <!--Nos redirecciona a la página = Botón Editar-->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#editarP").click(function(){
          event.preventDefault();
          $(location).attr('href', 'edit_empleo.php');
        });
      });
    </script>

    <!--Nos redirecciona a la página = Botón Interesados-->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#interesados").click(function(){
          event.preventDefault();
          $(location).attr('href', 'interesados.php');
        });
      });
    </script>

  </body>
</html>
