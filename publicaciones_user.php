<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");
?>
<!--  SITIO - PUBLICACIONES. EL USUARIO PUEDE VISUALIZAR LAS PUBLICACIONES QUE HA REALIZADO. TAMBIÉN PODRÁ EDITAR DICHO EMPLEO O VISUALIZAR AQUELLOS USUARIOS INTERESADOS EN SU PUBLICACIÓN  -->
<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Mis publicaciones</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas + puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
  <?php include "_header.php"; ?>

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

          <?php include 'assets/php/misPublicaciones.php'?>

        <br>
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
  </body>
</html>
