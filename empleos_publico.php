<?php
  require('assets/php/Consultas.php');
  $consultas = new Consultas();
  $areas = $consultas->GetAreas();
  //require('assets/php/consulta_GetAllJobs.php');
  //$trabajos = new Consultas_GAJ();
  //$trabajos = $consultas->getAllJobs('');
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
      <script src="request_publico.js"></script> <!--Request ajax empleos_publico-->
      
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
                    <td style=""><input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Busca un empleo" aria-label="Search" style="border-radius: 50px;"></td>
                    
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

                        <!-- Checkboxes - Todas las cetegorias -->
                        <div class="col section1 text-center">
                          <input type="checkbox" class="common-selector categoria"  value="<?php echo $a['nombre']; ?>"><?php echo $a['nombre']; ?></input>
                          
                        </div>
                      </div> <!-- Fin - 1ra fila -->
                    <?php } ?>
                      <br>
                    </div> <!-- Fin - Div de las filas y columas -->
                  </div> <!-- Fin - Cuerpo del modal -->
                </div> <!-- Fin - Contenido del modal -->
              </div> <!-- Fin - Modal dialog -->
            </div> <!-- Fin del modal -->
          </div><!-- Fin - Div Texto -->
          <br>
          <!-- TODO EL CONTENIDO VA AQUI --> 
          <!-- Image loader -->
          <div id='loader' class="text-center">
            <img src='assets/img/loading.gif'  width='112px' height='112px'>
          </div>
          <!-- Image loader -->
          <!-- Publicación 1 - Inicio. -->
          <div id="card-data">

          </div><!-- FIN Publicación 1 - Inicio. -->
         <!-- 
          </div>   
        </div>
        <br> -->
        </br>
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
      //code moved to request.js
    </script>
      
    <!--Script search -->
    <script>

      

    </script>

  </body>
</html>
