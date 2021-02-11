<?php
session_start();
if (!isset($_SESSION['usuario']))
  Header("Location: login.php");
?>

<!DOCTYPE html>
<html>

<!--  ENCABEZADO  -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
  <title>Editar perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
  <!--Iconos - Estrellas-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/toastr.min.css">
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

<!-- ENCABEZADO -->
<?php include "_header2.php";

require('assets/php/Consultas.php');

// variables
$consultas = new Consultas();
$idUsuario = $_SESSION['usuario']['id'];

// datos originales del usuario
$user = $consultas->DatosUsuario($idUsuario);
$sexos = $consultas->GetSexos();
$areas = $consultas->GetAreas();
?>

<!-- CUERPO -->

<body style="background: #E6E1E1;"><br>

  <!--Formulario-->
  <form id="profile_edit" enctype="multipart/form-data">

    <div class="container" style="background: #FFFFFF;">
      <div class="form-group"><br>

        <!--Título principal-->
        <div class="container p-2 mg-1 texto" style="background: #F0F0F0"><br>
          <h3 class="text-dark" style="text-align: center;"><strong> Editar perfil </strong></h3>
        </div><br>

        <div class="container">

          <!--Imagen - Foto de peril-->
          <div class="card mb-3">

            <!--Inicio - Div - Editar columna-->
            <div class="">

              <!-- Botón del modal - Mostrar foto -->
              <button type="button" class="btn btn-dark btn-sm  m-2 float-right" data-toggle="modal" data-target="#mostrarPhoro">
                <span class="fas fa-edit"></span>
              </button><br>

              <center>
                <label class="labelchiquita">
                  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ocultar/mostrar foto</strong>
                </label>
              </center>

              <div id="mostrarPhoro" class="modal fade" role="dialog">
                <!--Inicio - Modal-->
                <div class="modal-dialog">
                  <!--Inicio - Modal dialog-->
                  <div class="modal-content">
                    <!--Inicio - Modal content-->
                    <div class="modal-header texto">
                      <!--Inicio - Modal header/Título-->
                      <h4 class="modal-title">¿Deseas ocultar tu foto?</h4>
                      <button type="button" id="cerrar" class="close" data-dismiss="modal">&times;</button>
                      <!--Botón que crea la X para cerrar el modal-->
                    </div>
                    <!--Fin - Modal header/Título-->

                    <div class="modal-body">
                      <!--Inicio - Modal body/Contenido del modal-->
                      <p class="mx-4 my-3 pchiquito" style="text-align: justify;">Tu seguridad es muy importante para nosotros, es por ello que te damos la oportunidad de escoger si quieres o no mostrar tu foto a los demás usuarios.
                        Si no lo deseas, esta sección no aparecerá en ningun sitio, es decir seas tú u otro que entre a tu perfil.<br><br>
                        ¿Deseas ocultar tu foto en tu perfil?</p>

                      <!-- Botones -->
                      <div class="row mx-4 align-self-center section1 text-center">

                        <!-- Botón - Sí -->
                        <div class="col texto my-1">
                          <button class="btn btn-danger" type="button" id="siPhoro" name="noPhoro" style="border-radius: 50px; height: 40px; width: 130px;">Sí</button>
                        </div>

                        <!-- Botón - No -->
                        <div class="col texto my-1">
                          <button class="btn btn-success" type="button" id="noPhoro" name="siPhoro" style="border-radius: 50px; height: 40px; width: 130px;">No</button>
                        </div>
                      </div>
                    </div>
                    <!--Fin - Modal body/Contenido del modal-->
                  </div>
                  <!--Fin - Modal content-->
                </div>
                <!--Inicio - Modal dialog-->
              </div>
              <!--Fin - Modal-->
            </div>
            <!--Inicio - Div - Editar columna-->

            <div class="card-body text-center shadow" id="boxPhoro">
              <!--Inicio - Caja de la foto-->

              <!--Título de la sección-->
              <div class="card-header texto">
                <h5 class="font-weight-bold" style="text-align: center;"> Tu foto </h5>
              </div>

              <!--Foto del usuario-->
              <img class="rounded-circle mb-3 mt-4" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['foto']); ?>" height="190">

              <!--Botón para cambiar la foto del usuario-->
              <div class="mb-3 texto">
                <button type="button" class="btn btn-outline-dark btn-sm" data-target="#myModalDos" data-toggle="modal" style="border-radius: 45px; width: 160px; height: 40px; text-align: center;" type="button">Cambiar foto</button>
              </div>
            </div>
            <!--Fin - Caja de la foto-->

            <!--2. Creación de la ventana del modal -->
            <div id="myModalDos" class="modal fade" role="dialog">

              <!--3. Permite ver el contenido del modal -->
              <div class="modal-dialog">

                <!--4. Aquí se coloca en condenido del modal-->
                <div class="modal-content">

                  <!--5. Cabecera del modal-->
                  <div class="modal-header texto">
                    <h4 class="modal-title">Selecciona una foto.</h4>
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
                  <div class="modal-footer texto">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
              <!--/Termina el modal de la foto-->
            </div>

            <div class="card shadow mb-3">

              <!--Título del apartado-->
              <div class="card-header py-3 texto">
                <h5 class="m-0 font-weight-bold" style="text-align: center;">Información general</h5>
              </div>

              <div class="card-body">

                <!--Fila 1 - Nickname y nombre-->
                <div class="form-row pb-3">

                  <!--Nombre-->
                  <div class="col-xs-12 col-md-12">
                    <div class="form-group texto">
                      <center><label class="ml-2" for=""><strong>Nombre</strong></label></center>
                      <input class="form-control subtitulo" id="nombre" type="text" value="<?php echo $user['nom']; ?>" name="nombre" style="border-radius: 18px;" />
                    </div>
                  </div>
                </div>

                <!--Fila 2 - Apellidos-->
                <div class="form-row pb-3">

                  <!--Apellido paterno-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Apellido paterno</strong></label>
                      <input class="form-control subtitulo" id="a_paterno" type="text" value="<?php echo $user['app']; ?>" name="a_paterno" style="border-radius: 18px;" />
                    </div>
                  </div>

                  <!--Apellido materno-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Apellido Materno</strong></label>
                      <input class="form-control subtitulo" id="a_materno" type="text" name="a_materno" value="<?php echo $user['apm']; ?>" style="border-radius: 18px;" />
                    </div>
                  </div>
                </div>

                <!--Fila 3 - Sexo y fecha de nacimiento-->
                <div class="form-row pb-3">

                  <!--Sexo-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Sexo</strong></label>
                      <select class="form-control" name="genero" style="border-radius: 18px;">
                        <optgroup class="subtitulo" label="Sexo">

                          <!--Nombre del área-->
                          <?php
                          /* imprime los sexos obtenidos del atributo sexo (enum) de la tabla usuario y 
                          despliega el sexo del usuario como opción seleccionada */
                          foreach ($sexos as $sexo) {
                            if ($sexo == $user['sexo']) { ?>
                              <option class="subtitulo" selected value=<?php echo $sexo ?>><?php echo $sexo ?></option>
                            <?php
                            } else { ?>
                              <option class="subtitulo" value=<?php echo $sexo ?>><?php echo $sexo ?></option>
                          <?php }
                          } ?>

                        </optgroup>
                      </select>
                    </div>
                  </div>

                  <!--Fecha de nacimiento-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Fecha de nacimiento</strong></label>
                      <input id="fecha" name="fecha" class="form-control subtitulo" type="date" placeholder="" value="<?php echo $user['fecnac']; ?>" style="border-radius: 18px;" />
                    </div>
                  </div>
                </div>

                <!--Fila 4 - Área y especialidad-->
                <div class="form-row pb-3">

                  <!--Área-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Área</strong></label>
                      <select class="form-control" name="empArea" style="border-radius: 18px;">
                        <optgroup class="subtitulo" label="Área">

                          <!--Nombre del área del usuario-->
                          
                          <?php
                          foreach ($areas as $area) {
                            if($user['arnom'] == $area['nombre']){?>
                            <option class="subtitulo" value="<?php echo ($area['id']); ?>" selected=""><?php echo $area["nombre"]; ?></option>
                          <?php }  else {?>
                            <!--Nombre del área del usuario-->
                            <option class="subtitulo" value="<?php echo ($area['id']); ?>"><?php echo $area["nombre"]; ?></option>
                          <?php }
                          }
                          ?>
                        </optgroup>
                      </select>
                    </div>
                  </div>

                  <!--Especialidad-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Especialidad</strong></label>
                      <input class="form-control subtitulo" id="empEspecialidad" name="empEspecialidad" type="text" value="<?php echo $user['esp']; ?>" style="border-radius: 18px;" />
                    </div>
                  </div>
                </div>

                <!--Fila 5 - Estado y Ciudad-->
                <div class="form-row pb-3">

                  <!--Estado-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Estado</strong></label>
                      <input class="form-control subtitulo" id="estado" name="estado" type="text" value="<?php echo $user['estado']; ?>" style="border-radius: 18px;" />
                    </div>
                  </div>

                  <!--Ciudad-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group texto">
                      <label class="ml-2" for=""><strong>Ciudad</strong></label>
                      <input class="form-control subtitulo" id="ciudad" name="ciudad" type="text" value="<?php echo $user['ciudad']; ?>" style="border-radius: 18px;" />
                    </div>
                  </div>
                </div>

                <!--Fila 6 - URL de facebook-->
                <div class="form-row pb-3">

                  <!--Facebook-->
                  <div class="col">
                    <div class="form-group texto">
                      <center>
                        <label class="ml-2" for=""><span class="fab fa-facebook-square" style="font-size: 30px;">&nbsp;&nbsp;</span><strong>Link de facebook</strong></label>
                      </center>

                      <input class="form-control subtitulo" type="text" id="facebook" name="facebook" value="<?php echo $user['fbref']; ?>" style="border-radius: 18px;"></input>
                      <br>
                    </div>
                  </div>
                </div>

                <!--Fila 7 - Descripción-->
                <div class="form-row pb-3">

                  <!--Descripción-->
                  <div class="col">
                    <div class="form-group">
                      <label class="ml-2 texto" for=""><strong>Descripción</strong></label>
                      <textarea class="form-control labelchiquita" id="descripcion" name="descripcion" value="asad" type="text" placeholder="" style="border-radius: 18px; height: 150px;"><?php echo $user['descripcion']; ?></textarea>
                    </div>
                  </div>
                </div>

                <!--Botón  Guardar cambios-->
                <div class="form-row">
                  <div class="col section1 text-center py-2 texto">
                    <button class="btn btn-success text-white btn-user" id="guardar" type="submit" role="button" style="border-radius: 50px; width: 180px; height: 45px; text-align: center;">Guardar cambios</button>
                  </div>

                  <!--Botón  Regresar -->
                  <div class="col section1 text-center py-2 texto">
                    <button class="btn text-white btn-user" id="salir" role="button" style="background: #206BAA; border-radius: 40px; width: 180px; height: 45px; text-align: center;" type="button">Regresar</button>
                  </div>
                </div>
              </div>
            </div>
          </div><br>
        </div>
      </div>

      <footer class="text-center text-lg-start text-white" style="background: #000000;">
        <!-- Copyright -->
        <div class="text-center p-3 texto">
          © 2021 Copyright:
          <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
        </div>
      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/jquery.validate.js"></script>
      <script src="assets/js/toastr.min.js"></script>
      <script type="text/javascript">
        if ($(window).width() > 992) {
          $(window).scroll(function() {
            if ($(this).scrollTop() > 40) {
              $('#navbar_top').addClass("fixed-top");
              // add padding top to show content behind navbar
              $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            } else {
              $('#navbar_top').removeClass("fixed-top");
              // remove padding top from body
              $('body').css('padding-top', '0');
            }
          });
        } // end if
      </script>

      <!--Nos redirecciona a la página = Botón Guardar cambios-->

      <!--Nos redirecciona a la página = Botón Regresar-->
      <!-- Aca cambiaran los divs -->
      <script type="text/javascript">
        $(document).ready(function() {
          //Next hacia c2
          $("#profile_edit").submit(function(event) {
            event.preventDefault();
            if (($('#n_name').val() == '') || ($('#nombre').val() == '') || ($('#a_paterno').val() == '') || ($('#a_materno').val() == '') ||
              ($('#empEspecialidad').val() == '') || ($('#estado').val() == '') || ($('#ciudad').val() == '') || ($('#descripcion').val() == '')) {
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
              var inputs = new FormData(this);
              $.ajax({
                type: "POST",
                url: "assets/php/user-edit.php",
                data: inputs,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'JSON',
                success: function(data) {
                  if (data['exito'] == true) {
                    // registro exitoso, redirecciona
                    window.location.href = 'profile_user.php';
                  } else {
                    toastr["warning"]("No se ha podido registrar el usuario");
                    console.debug(data['msg']);
                  }

                },
                error: function(jqXHR, exception, errorThrown) {
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
            }
          });
        });
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
          $("#salir").click(function() {
            event.preventDefault();
            $(location).attr('href', 'profile_user.php');
          });
        });
      </script>


      <script type="text/javascript">
        $(document).ready(function() {

          $("#profile_edit").validate({
            rules: {
              n_name: {
                minlength: 3,
              },
              nombre: {
                minlength: 3
              },
              a_paterno: {
                minlength: 3
              },
              a_materno: {
                minlength: 3
              },
              empEspecialidad: {
                minlength: 4
              },
              estado: {
                minlength: 4
              },
              ciudad: {
                minlength: 4
              },
              descripcion: {
                minlength: 20
              }
            },
            messages: {

              nombre: {
                minlength: "Al menos 3 letras debe contener el nombre."
              },
              a_paterno: {
                minlength: "Al menos 3 letras debe contener el apellido paterno."
              },
              a_materno: {
                minlength: "Al menos 3 letras debe contener el apellido materno."
              },
              empEspecialidad: {
                minlength: "Al menos 4 letras debe contener tu especialidad."
              },
              estado: {
                minlength: "Al menos 4 letras debe contener tu Estado."
              },
              ciudad: {
                minlength: "Al menos 4 letras debe contener tu Ciudad."
              },
              descripcion: {
                minlength: "Al menos 20 letras o caracteres debe contener tu descripcion."
              }
            }
          });
        });
      </script>

      <!-- Script - Botón "siPhoro" - Muestra el diseño oginidal del sitio (2 filas de lado izq), porque el usuario desea mostrar su fotografía-->
      <script type="text/javascript">
        $(document).ready(() => {
          $("#noPhoro").click(function() {
            event.preventDefault();
            $("#cerrar").click();
            $("#boxPhoro").show();
            $("#secomentario").css('height', 'auto');
          });
        });
      </script>

      <!-- Script - Botón "noPhoro" - Modifica el diseo del sitio (1 fila de lado izq), porque el usuario no desea mostrar su fotografía-->
      <script type="text/javascript">
        $(document).ready(() => {
          $("#siPhoro").click(function() {
            event.preventDefault();
            $("#cerrar").click();
            $("#boxPhoro").hide();
            $("#secomentario").css('height', '850');
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
              console.log(this);
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
  </form>
</body>

</html>