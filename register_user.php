<!--  SITIO - INICIO DE SESIÓN -->
<?php
require('assets/php/Queries.php');
$queries = new Queries();
$areas = $queries->GetAreas();
?>
<html>

<!--ENCABEZADO-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
  <title>Registro</title>

  <!--Enlaces-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link rel="stylesheet" href="assets/css/Header-Blue.css">
  <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="assets/css/floating-labels.min.css">
  <link rel="stylesheet" href="assets/css/toastr.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
  .image-preview {
    width: 300px;
    min-height: 100px;
    border: 2px solid #dddddd;
    margin-top: 15px;

    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #CCCCCC;
  }

  .image-preview_image {
    display: none;
    width: 100%;
  }

  .image-previeww {
    width: 300px;
    min-height: 100px;
    border: 2px solid #dddddd;
    margin-top: 15px;

    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #CCCCCC;
  }

  .image-preview_imagee {
    display: none;
    width: 100%;
  }
</style>
<!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->

<header>
  <div class="py-2" style="background: #FFFFFF;">
    <div class="container">
      <center><a href="empleos_publico.php"><img src="assets/img/Logo/color.png" class="img-fluid mr-3" style="width: 120px; height: 85px;"></a></center>
    </div>
  </div>
</header>

<!--CUERPO-->

<body style="background: #E6E1E1;">
  <form name="registro" id="registro" action="#" method="post" enctype="multipart/form-data">
    <!---------------------------------- PARTE 1 DEL REGISTRO ------------------------------------->
    <div class="container" id="c1">
      <!-- Contenedor principal-->
      <div class="card shadow-lg o-hidden border-0 my-4">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="p-5">
                <!--Título principal-->
                <div class="text-center texto">
                  <h3 class="text-dark mb-4 "><strong>Registro</strong></h3>
                </div>
                <!--Nickname/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="20" type="text" id="n_name" name="n_name" pattern="[a-zA-Z]+" placeholder="Nickname" style="border-radius: 50px;" />
                  <label class="texto" for="n_name">Nickname *</label>
                </div>
                <br>
                <!--Nombre del usuario/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="100" type="text" id="nombre" name="nombre" pattern="[a-zA-Z]+" placeholder="Nombre" style="border-radius: 50px;" />
                  <label class="texto" for="nombre">Nombre *</label>
                </div>
                <br>
                <!--Apellido paterno/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="100" type="text" id="a_paterno" name="a_paterno" pattern="[a-zA-Z]+" placeholder="Apellido paterno" style="border-radius: 50px;" />
                  <label class="texto" for="a_paterno">Apellido Paterno *</label>
                </div>
                <br>
                <!--Apellido materno/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="100" type="text" id="a_materno" name="a_materno" pattern="[a-zA-Z]+" placeholder="Apellido materno" style="border-radius: 50px;" />
                  <label class="texto" for="a_materno">Apellido Materno *</label>
                </div>
                <br>

                <!--Correo electrónico/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="100" type="email" id="email" name="email" placeholder="Correo electrónico" style="border-radius: 50px;" />
                  <label class="texto" for="email">Correo electrónico *</label>
                </div>

                <br>
                <!--Red social-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="100" type="text" id="facebook" name="facebook" pattern="[a-zA-Z]+" value="https://www.facebook.com/" style="border-radius: 50px;" />
                  <label class="texto" for="facebook">Link de Facebook</label>
                </div>

                <div id="result-username"></div>
                <br>
                <!--Barra de proceso-->
                <div class="form-group">
                  <div class="progress">
                    <div class="progress-bar barra" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style=" background: #23B439; border-radius: 50px; width: 33%;">33%</div>
                  </div>
                </div>

                <br>
                <!--Botones de regresar y siguiente-->
                <div class="form-group row">
                  <!--Botón para regresar-->
                  <div class="col-sm-6"><a href="index.html" class="btn btn-block text-white btn-user texto" role="button" style="background: #EF5A10; border-radius: 50px;">Regresar</a>
                    <hr>
                  </div>
                  <!--Botón de siguiente-->
                  <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #23B439;  border-radius: 50px;" id="bnext1">Siguiente</button>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Fin del contenedor del parte 1-->


    <!---------------------------------- PARTE 2 DEL REGISTRO ------------------------------------->
    <div class="container" id="c2" style="display:none;">
      <!-- Contenedor principal-->
      <div class="card shadow-lg o-hidden border-0 my-4">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="p-5">
                <!--Título principal-->
                <div class="text-center texto">
                  <h2 class="text-dark mb-4">Registro</h2>
                </div>
                <!--Boton para pedir foto relacionada al usuario/---->
                <div class="text-center">
                  <button type="button" class="mb-3 mt-4 btn btn-info texto" data-toggle="modal" data-target="#myModal" style="width: auto; height: 60px; text-align: center;">Agregar/Ver foto</button>
                </div>

                <!--2. Creación de la ventana del modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <!--3. Permite ver el contenido del modal -->
                  <div class="modal-dialog">
                    <!--4. Aquí se coloca en condenido del modal-->
                    <div class="modal-content">
                      <!--5. Cabecera del modal-->
                      <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        <h4 class="modal-title texto"><strong>Selecciona una foto *</strong></h4>
                      </div>

                      <!--6. Cuerpo del modal-->
                      <div class="modal-body">
                        <div class="container">
                          <p class="pchiquito" style="text-align:justify">Instrucciones: <br> Haz clic en el botón "Seleccionar foto" para escoger tu foto. <br><b>Nota: </b>Luego de seleccionarla veras que aparece una vista previa de la foto en un apartado. Posteriormente da clic en el botón "Cerrar" y listo.</p>

                          <!--Botón: Muestra tu foto/segun-->
                          <div class="border border-light p-3 mb-4">
                            <div class="text-center texto">
                              <input type="button" class="btn btn-primary subtitulo" style="border-radius: 50px;width: auto;text-align: center;height: 45px7;" role="button" value="Seleccionar foto" onclick="document.getElementById('inpFile').click()">
                              <input type="file" name="inpFile" id="inpFile" style="display: none;" accept="image/*">
                              <center>
                                <div class="image-preview" id="imagePreview">
                                  <img src="" alt="Image Preview" class="image-preview_image">
                                  <span class="image-preview_default-text">Vista previa de la foto</span>
                                </div>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--7. Pie del modal-->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default texto" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/Termina el modal de la foto-->
                <br>
                <!--Contraseña/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" type="password" maxlength="100" id="cont" name="cont" placeholder="Contraseña" style="border-radius: 50px;" />
                  <label class="texto" for="cont">Contraseña *</label>
                </div>
                <br>
                <!--Fecha de nacimiento-->
                <div class="form-group">
                  <label class="titulo" for="fecha">&nbsp;&nbsp;&nbsp;Fecha de nacimiento: *</label>
                  <input id="fecha" name="fecha" class="form-control labelchiquita" type="date" style="border-radius: 50px; height: 45px7;" />
                </div>
                <br>
                <!--Estado y ciudad-->
                <!--Estado/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" type="text" maxlength="75" id="estado" name="estado" placeholder="Estado" style="border-radius: 50px;" />
                  <label class="texto" for="estado">Estado *</label>
                </div>
                <br>
                <!--Ciudad-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" type="text" maxlength="75" id="ciudad" name="ciudad" placeholder="Ciudad" style="border-radius: 50px;" />
                  <label class="texto" for="ciudad">Ciudad *</label>
                </div>
                <br>

                <!--Áreas y Especialidades del empleo-->
                <div class="form-group row">
                  <!--Área a la que va dirigida el usuario-->
                  <div class="col-sm-6 mb-3 mb-sm-0"><label class="titulo">&nbsp;&nbsp;Área que te interesa: *</label>
                    <select class="form-control form-control labelchiquita" name="empArea" id="empArea" style="border-radius: 50px;">
                      <option class="labelchiquita" value="" selected disabled>Áreas disponibles</option>
                      <?php
                      foreach ($areas as $area) {
                      ?>
                        <!--Nombre del área del usuario-->
                        <option class="labelchiquita" value="<?php echo ($area['id']); ?>"><?php echo $area["nombre"]; ?></option>
                      <?php
                      }
                      $pdo = null; // cierra conexión
                      ?>
                    </select>
                  </div>
                  <!--Especialidad del usuario-->
                  <div class="col-sm-6">
                    <label class="titulo">&nbsp;&nbsp;Especialidad adquirida:</label>
                    <input class="form-control form-control-user labelchiquita" maxlength="50" type="text" id="empEspecialidad" name="empEspecialidad" style="border-radius: 50px;" />
                  </div>
                </div>
                <br>

                <!--Barra de proceso-->
                <div class="form-group">
                  <div class="progress">
                    <div class="progress-bar barra" aria-valuenow="66" aria-valuemin="0" aria-valuemax="5000" style="background: #23B439; border-radius: 50px; width: 66%;">66%</div>
                  </div>
                </div>

                <br>
                <!--Botones de regresar y siguiente-->
                <div class="form-group row">
                  <!--Botón para regresar-->
                  <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #EF5A10; border-radius: 50px;" id="back1">Regresar</button>
                    <hr>
                  </div>
                  <!--Botón de siguiente-->
                  <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #23B439; border-radius: 50px;" id="bnext2">Siguiente</button>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Fin del contenedor del parte 2-->


    <!---------------------------------- PARTE 3 DEL REGISTRO ------------------------------------->
    <div class="container" id="c3" style="display:none;">
      <!-- Contenedor principal-->
      <div class="card shadow-lg o-hidden border-0 my-4">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="p-5">
                <!--Título principal-->
                <div class="text-center texto">
                  <h2 class="text-dark mb-4">Registro</h2>
                </div>
                <!--Número telefónico/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="10" type="text" id="telefono" name="telefono" placeholder="Número telefónico" style="border-radius: 50px;" />
                  <label class="texto" for="telefono">Número telefónico *</label>
                </div>
                <br>
                <!--Sexo-->
                <div class="form-group">
                  <label class="titulo">&nbsp;&nbsp;&nbsp;Sexo *</label>
                </div>
                <div class="text-center texto">
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="formCheck-3" value="Femenino" name="genero" /><label>Femenino</label>
                      </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="formCheck-2" value="Masculino" name="genero" /><label>Masculino</label>
                      </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="formCheck-1" value="Otro" name="genero" checked /><label>Otro</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Fin del div - sexo-->

                <!--RFC/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="13" type="text" id="rfc" name="rfc" placeholder="RFC" style="border-radius: 50px;" />
                  <label class="texto" for="rfc">RFC *</label>
                </div>
                <br>
                <!--Clave INE/-->
                <div class="form-group form-label-group">
                  <input class="form-control labelchiquita" maxlength="13" type="text" id="ine" name="ine" placeholder="Clave INE" style="border-radius: 50px;" />
                  <label class="texto" for="ine">Clave INE *</label>
                </div>
                <br>
                <!--Descripcion-->
                <div class="form-group form-label-group">
                  <textarea class="form-control labelchiquita" maxlength="5000" type="text" name="descripcion" id="descripcion" placeholder="Descripcion" style="border-radius: 18px; height: 200px;"></textarea>
                  <label class="texto" for="descripcion">Descripción *</label>
                </div>
                <br>
                <!--Barra de proceso-->
                <div class="form-group">
                  <div class="progress">
                    <div class="progress-bar barra" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="background: #23B439; border-radius: 50px; width: 100%;">100%</div>
                  </div>
                </div>

                <!--Botones de regresar y siguiente-->
                <div class="form-group row">
                  <!--Botón para regresar-->
                  <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #EF5A10; border-radius: 50px;" id="back2">Regresar</button>
                    <hr>
                  </div>
                  <!--Botón de finalizar-->
                  <div class="col-sm-6"><button class="btn btn-block text-white btn-user texto" style="background: #23B439; border-radius: 50px;" id="bnext3" type="submit">Finalizar</button>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Fin del contenedor del parte 1-->
  </form>

  <!--Inicio footer-->
  <footer class="text-center text-lg-start text-white" style="background: #080000;">
    <!-- Copyright -->
    <div class="text-center p-3 texto">
      © 2021 Copyright:
      <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
    </div>
  </footer>
  <!--Fin Footer-->

  <!--Scripts-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/toastr.min.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <!-- Scripts de validacion de cada uno de los form_registrer

        La logica es:
          En caso de qu|e el usuario llene correctamente la primera parte
          se habilita el boton para que este no de dos veces clic

          y puede continuar con el registro -->
  <script type="text/javascript">
    $(document).ready(function() {
      $("#bnext3").prop("disabled", true);
      $("#registro").validate({
        rules: {
          n_name: {
            required: true,
            minlength: 3
          },
          nombre: {
            required: true,
            minlength: 3
          },
          a_paterno: {
            required: true,
            minlength: 3
          },
          a_materno: {
            required: true,
            minlength: 3
          },
          email: {
            required: true,
            email: true
          },
          cont: {
            required: true,
            minlength: 8
          },
          fecha: {
            required: true
          },
          estado: {
            required: true,
            minlength: 4
          },
          ciudad: {
            required: true,
            minlength: 4
          },
          empEspecialidad: {
            minlength: 4
          },
          telefono: {
            required: true,
            number: true,
            minlength: 10
          },
          rfc: {
            required: true,
            minlength: 12
          },
          ine: {
            required: true,
            minlength: 13
          },
          descripcion: {
            required: true,
            minlength: 20
          }
        },
        messages: {
          n_name: {
            required: "Ingresa tu nickname",
            minlength: "<br><br>Al menos 3 letras debe de llevar tu nickname"
          },
          nombre: {
            required: "Ingresa tu nombre",
            minlength: "<br><br>Al menos 3 letras debe de llevar tu nombre"
          },
          a_paterno: {
            required: "Ingresa tu apellido paterno",
            minlength: "<br><br>Al menos 3 letras debe de llevar tu apellido paterno"
          },
          a_materno: {
            required: "Ingresa tu apellido materno",
            minlength: "<br><br>Al menos 3 letras debe de llevar tu apellido materno"
          },
          email: {
            required: "Ingresa tu email",
            email: "<br><br>El formato debe de ser: abc@dominio.extension"
          },
          cont: {
            required: "Ingresa tu contraseña",
            minlength: "<br><br>Al menos 8 caracteres debe contener la contraseña"
          },
          fecha: {
            required: "Ingresa tu fecha de nacimiento"
          },
          estado: {
            required: "Ingresa tu Estado",
            minlength: "<br><br>Debe tener 4 letras tu estado"
          },
          ciudad: {
            required: "Ingresa tu Ciudad",
            minlength: "<br><br>Debe tener 4 letras tu ciudad"
          },
          empEspecialidad: {
            minlength: "Debe tener 4 caracteres la especialidad"
          },
          telefono: {
            required: "Ingresa tu número",
            number: "<br><br>Este campo solo admite caracteres numéricos",
            minlength: "<br><br>Debe tener 10 digitos para ser valido"
          },
          rfc: {
            required: "Ingresa tu RFC",
            minlength: "<br><br>12 caracteres debe tener tu RFC"
          },
          ine: {
            required: "Ingresa tu INE",
            minlength: "<br><br>13 caracteres debe de tener tu INE"
          },
          descripcion: {
            required: "Ingresa una descripción nos interesa saber de ti",
            minlength: "<br><br>Al menos 20 letras o caracteres deben de contener tu descripción"
          }
        }
      });

      $('#registro').bind('change keyup', function() {
        if ($(this).validate().checkForm()) {
          $('#bnext3').prop('disabled', false);
        } else {
          $('#bnext3').prop('disabled', true);
        }
      });

    });
  </script>

  <!-- Aca cambiaran los divs -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#bnext3').prop('disabled', true);
      //Next hacia c2
      $("#bnext1").click(function() {
        event.preventDefault();
        if (($('#n_name').val() == '') || ($('#nombre').val() == '') || ($('#a_paterno').val() == '') || ($('#a_materno').val() == '') || ($('#email').val() == '')) {
          toastr["warning"]("No puede haber campos vacíos, llenalos para continuar")

          toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        } else {
          $("#c1").hide();
          $("#c2").show(1000);
        }
      });

      $("#bnext2").click(function() {
        event.preventDefault();
        if (($('#cont').val() == '') || ($('#estado').val() == '') || ($('#ciudad').val() == '') || ($('#fecha').val() == '')) {
          toastr["warning"]("No puede haber campos vacíos, llenalos para continuar")

          toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        } else {
          $("#c2").hide();
          $("#c3").show(1000);
        }
      });

      //Back hacia c1
      $("#back1").click(function() {
        event.preventDefault();
        $("#c2").hide();
        $("#c1").show(1000);
      });

      //Next hacia c3

      //Back hacia c2
      $("#back2").click(function() {
        event.preventDefault();
        $("#c3").hide();
        $("#c2").show(1000);
      });

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#registro').submit(function(event) {
        event.preventDefault();
        let inputs = new FormData(this);
        $.ajax({
          type: "POST",
          url: "assets/php/registro-user.php",
          data: inputs,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'JSON',
          success: function(data) {
            if (data['status'] == true) {
              // registro exitoso, redirecciona
              window.location.href = 'login.php';
            } else {
              toastr["warning"]("No se ha podido registrar el usuario");
              console.debug(data);
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
            toastr["error"]("Hubo un error al registrar");
            console.debug("Error: " + errorThrown);
          }
        });
        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "2000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
      });
    });
  </script>

<!-- VALIDACIONES -->
  <script type="text/javascript">
    $(document).ready(function() {

      $('#email').on('blur', function() {
        $('#result-username').html('<p> Toy cargando </p>').fadeOut(1000);
        var correo = $(this).val();
        $.ajax({
          type: "POST",
          url: "assets/php/query-existeus.php",
          data: {
            "correo": correo
          },
          success: function(data) {
            $('#result-username').fadeIn(1000).html(data);
          }
        });
      });
    });
  </script>

  <script>
    const inpFile = document.getElementById("inpFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview_image");
    const previewDefaultText = previewContainer.querySelector(".image-preview_default-text");

    inpFile.addEventListener("change", function() {
      const file = this.files[0];

      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";

        reader.addEventListener("load", function() {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);

      } else {
        previewDefaultText.style.display = null;
        previewImage.style.display = null;
        previewImage.setAttribute("src", "");
      }
    });
  </script>
</body>

</html>