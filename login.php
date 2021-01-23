<!--  SITIO - INICIO DE SESIÓN -->
<!DOCTYPE html>
<html>

<!--ENCABEZADO-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
  <title>Login</title>

  <!--Enlaces-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link rel="stylesheet" href="assets/css/Header-Blue.css">
  <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="assets/css/floating-labels.min.css">
  <link rel="stylesheet" href="assets/css/toastr.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<!--CUERPO-->

<header>
  <div class="py-2" style="background: #FFFFFF;">
      <div class="container">
        <center><a href="empleos_publico.php"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
      </div>
    </div>
</header>

<body style="background: #E6E1E1;"> <br><!-- Background gris-->
  <div class="container">
    <!-- Contenedor principal-->
    <div class="card shadow-lg o-hidden border-0 my-3">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="p-5">
              <!--Título principal-->
              <div class="text-center texto">
                <h3 class="text-dark mb-4"><strong>Iniciar Sesión</strong></h3>
              </div>
              <!-- Formulario para iniciar sesión -->
              <form id="login">
                <!--Correo electrónico/-->
                <div class="form-group form-label-group">
                  <input class="form-control" type="email" id="inputEmail" name="email" placeholder="Correo electrónico" style="border-radius: 50px;" />
                  <label for="email">Correo electrónico</label>
                </div>
                <br>

                <!--Contraseña/-->
                <div class="form-group form-label-group">
                  <input class="form-control" type="password" id="cont" name="cont" placeholder="Contraseña" style="border-radius: 50px;" />
                  <label for="cont">Contraseña</label>
                </div>
                <br><br>
                <!--Botones para regresar o iniciar sesión-->
                <div class="form-group row">
                  <!--Botón para iniciar sesión-->
                  <div class="col-sm-6">
                    <button class="btn btn-block text-white btn-user" style="background: #23B439; border-radius: 50px;" id="inicia" name="login-submit" type="submit">
                      Inicia sesión
                    </button>
                    <hr>
                  </div>
                  <!--Botón para regresar-->
                  <div class="col-sm-6">
                    <a href="index.html" class="btn btn-block text-white btn-user" role="button" style="background: #EF5A10; border-radius: 50px;">
                      Regresar
                    </a>
                    <hr>
                  </div>
                </div>
                <!--Enlace para acceder al registro en caso de no tener cuenta-->
                <div class="text-center">
                  <a class="labelchiquita" href="register_user.php">¿No tienes una cuenta? Da click aquí.</a>
                </div>
              </form>
            </div>
          </div>
        </div>
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

  <!--Scripts-->
  <script src="assets/js/jquery.min.js"> </script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/toastr.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#login").validate({
        rules: {
          email: {
            required: true,
            email: true
          },
          cont: {
            required: true,
            minlength: 8
          },
        },
        messages: {

          email: {
            required: "Por favor, ingresa tu email",
            email: "<br><br>El formato debe de ser: abc@dominio.extension"
          },
          cont: {
            required: "Por favor, ingresa tu contraseña",
            minlength: "<br><br>Al menos 8 caracteres debe tener la contraseña"
          }
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      var toastOptions = {
        closeButton: false,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
      };

      $('#login').submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "assets/php/login.php",
          data: $(this).serialize(),
          dataType: "JSON",
          success: function(respuesta) {
            if (respuesta['datos_correctos'] == false) {
              toastr["warning"]("No se puedo iniciar sesión", "Usuario o contraseña incorrectos");
              toastr.options = toastOptions;
            } else {
              window.location.href = 'empleos_publico.php';
            }
          },
          error: function(jqXHR, exception, errorThrown) {
            var msg = '';
            if (jqXHR.status === 0) {
              msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
              msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
              msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
              msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
              msg = 'Time out error.';
            } else if (exception === 'abort') {
              msg = 'Ajax request aborted.';
            } else {
              msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            console.log("Error: " + errorThrown);
          }
        });
      });
    });
  </script>
</body>

</html>
