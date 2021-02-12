
<?php
session_start();
if(!isset($_SESSION['usuario'])){
  Header("Location: login.php");
}else {
  include('assets/php/conection.php');
  require('assets/php/Consultas.php');

  $consultas = new Consultas();
   $username = $_SESSION['usuario']['id'];
  $trabajo = (int)$_GET['trabajo'];
  $interesados = $consultas->VerInteresados($trabajo);
 ?>
<!--  SITIO - LISTA DE INTERESADOS EN ALGUNA PUBLICACIÓN DEL USUARIO.  -->

<html>

  <!-- ENCABEZADO -->
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Interesados</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!--Iconos - Estrellas + puerta-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="assets/css/styles.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
      <script  src = "https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"> </script>
  </head>

  <!-- CUERPO -->
  <body  class="justify-content-center" style="background: #E6E1E1;">

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <?php include "_header2.php"; ?>

    <!---------------------------------------------------- INTERESADOS -------------------------------------------------------->

    <div class="container my-4" style="background: #FFFFFF;"><br>

      <!--Título principal-->
      <div class="container texto py-2 mg-1 texto" style="background: #F0F0F0;"><br>
        <h2 class="text-dark" style="text-align: center;"><strong>Interesados</strong></h2>
      </div>

      <!--Div espaciador-->
      <div class="py-2"></div>

      <?php
      //if($verInteresados){
      foreach ($interesados as $result) {
      ?>
      <!--Fila 1- Inicio. Usuario interesado-->
      <div class="card shadow container">
        <div class="row py-3">

          <!--Columna de la foto-->
          <div class="col-md-6 col-lg-4 texto item align-self-center" >
            <img class="rounded-circle img-thumbnail mx-auto d-block" style="height: 180px; width: 180px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($result['foto']); ?>"><br>
            <label class="form-control-plaintext" type="text" value="" readonly style="text-align: center;"><strong><?php echo $result['apodo']; ?></strong></label>
          </div>

          <!--Columna con fila incluida-->
          <div class="col-md-6 col-lg-4 item align-self-center">

            <!--Fila de área-->
            <div class="row">
              <div class="col texto">
                <label type="text"><strong>Área:</strong></label>
                <label class="form-control-plaintext subtitulo" readonly style="border-bottom-color:#ada2a2; text-align: justify;"><?php echo $result['arnom']; ?></label>
              </div>
            </div>
            <br>

            <!--Fila de especialidad-->
            <div class="row">
              <div class="col texto">
                <label type="text"><strong>Especialidad:</strong></label>
                <label class="form-control-plaintext subtitulo" readonly style="border-bottom-color:#ada2a2; text-align: justify;"><?php echo $result['esp']; ?></label>
              </div>
            </div>
            <br>

            <!--Pa que se vea chulo-->
            <div class="row">
              <div class="col texto">
                <label class="text" style="text-align: justify;"><strong></strong></label>
                </div>
              </div>
            </div>

            <!--Columna del los botones-->
            <div class="col-md-6 col-lg-4 item align-self-center">

              <!--Botón - contactar-->
              <div class="row">
                <div class="col section1 text-center texto">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=+52<?php echo $result['telefono'];?>&text=¡Hola vi tu perfil en 'El Jale', veo que te intereso mi oferta!" id="contacto" class="btn text-white" type="button" style="background: #0B6811; border-radius: 50px; width: 160px; height: 45px;">Contactar <ion-icon name="logo-whatsapp" size="small"></ion-icon></a>
                </div>
              </div>


              <br><br>

              <!--Botón - Interesados-->
              <div class="row">
                <div class="col texto section1 text-center">
                  <?php if($username != (int)$result['userid']){?>
                  <a target="_blank" class="btn btn-info" href="profile_vistas.php?idu=<?php echo (int)$result['userid'];?>" id="visitar" style="border-radius: 50px; width: 160px; height: 45px; text-align:center;">Visitar perfil&nbsp;<ion-icon name="enter" size="small"></ion-icon></a>
                <?php } else{?>
                <a target="_blank" class="btn btn-info" href="profile_user.php" id="visitar" style="border-radius: 50px; width: 160px; height: 45px; text-align:center;">Visitar perfil&nbsp;<ion-icon name="enter" size="small"></ion-icon></a>
              <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div> <!--Fila 1 - Fin. Usuario interesado-->
        <br>
        <?php
          }
        //}else{
          ?>
          <!--
          <style>
            .section-generar-trabajo{
              display:flex;
              justify-content: center;
              align-items:center;
              flex-wrap:wrap;
            }

            .section-generar-trabajo p{
              margin:0;
              margin-right:2rem;
            }

            .section-generar-trabajo a{
              display: inline-block;
              color: white;
              background-color: #2a4eff;
              padding: 0.5rem;
              border-radius: 0.5em;
              text-decoration:none;
              transition: ease-in-out 0.2s;
            }

            .section-generar-trabajo a:hover{
              background-color: #4a4eff;
              box-shadow:0rem 0rem 0.2rem black;
            }


          </style>
            <section class="section-generar-trabajo">
              <p class="texto">Aún no tienes interesados. Regresa más tarde.</p>
              <a class="texto" href="publicaciones_user.php">Mis publicaciones</a>
            </section>

          <//?php
        }
        ?>  -->

        <br>
      </div>



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


<?php } ?>
  </body>
  <br>

  <!--PIE DE PÁGINA-->
  <footer class="text-center text-lg-start text-white" style="background: #000000;">
      <!-- Copyright -->
      <div class="text-center p-3 texto" >
        © 2021 Copyright:
        <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
      </div>
  </footer>
</html>
