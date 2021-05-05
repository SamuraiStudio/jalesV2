<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");

  require('assets/php/Consultas.php');
  $consultas = new Consultas();
  $areas = $consultas->GetAreas();
  $idUsuario = $_SESSION['usuario']['id'];
?>
<!--  SITIO PUBLICACION DE EMPLEO DISPONIBLES, EL USUARIO REGISTRADO PUEDE ACCEDER A ELLOS SE LE DA UNA Descripción DETALLADA -->
<html>

  <!--  ENCABEZADO  -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png"><!--Icono del navegador-->
      <title>Ofertas de trabajo - Usuario</title>
      <input type="hidden" id="datoUsuario" value="<?php echo $idUsuario ?>" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <!--Iconos - Puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
      <script src="request_usuarios.js"></script> <!--Request ajax empleos_usuarios-->
      <!--link rel="stylesheet" href="assets/css/styles.css"-->
      
  </head>

  <!-- CUERPO -->
  <body style="background-color: #E6E1E1;">

  <?php 
  include "_header2.php"; 

  ?>

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
        <table>
            <tr>
                <td style=""><input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Busca un empleo" aria-label="Search" style="border-radius: 50px;"></td><!--Buscador-->

                  <td> <button type="button" class="btn btn-secondary btn-lg" style="border-radius: 50px; text-align: center;" data-toggle="modal" data-target="#myModal">Categorías</button></td>
            </tr>
        </table>

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
      <!-- Inicio de Publicaciones -->
      <div id="card-data">

      </div><!-- FIN Publicaciones - Fin. -->
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
        
    </script>

  </body>
</html>
