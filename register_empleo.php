<!--  SITIO - REGISTRO DEL EMPLEO O TRABAJO DE ALGUN USUARIO.  -->

<!DOCTYPE html>
<html>

    <!--ENCABEZADO-->
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
      <title>Registrar empleo</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
        <!--Enlaces-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/floating-labels.min.css">
        <!-- plugin toastr -->
        <link rel="stylesheet" href="assets/css/toastr.min.css">
        <!--Iconos - Puerta-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <style>
      .image-preview{
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
      .image-preview_image{
        display: none;
        width: 100%;
      }
      .image-previeww{
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
      .image-preview_imagee{
        display: none;
        width: 100%;
      }
    </style>

    <!---------------------------------------------------MENÚ / BARRA DE NAVEGACIÓN -------------------------------------------------->
    <?php include "_header.php"; ?>
    
    <!--CUERPO-->
    <body style="background: #E6E1E1;"> <!-- Background gris-->

      <div class="container"><!-- Contenedor principal-->
        <div class="card shadow-lg o-hidden border-0 my-4">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="p-4">

                  <!--Título principal-->
                  <div class="container-fluid p-2 texto" style="background: #F0F0F0;"><br>
                    <h3 class="text-dark" style="text-align: center;"><strong> Agrega un empleo </strong></h3>
                  </div>

                  <!-- Formulario para registrar un empleo -->
                  <form id="empleoregister" enctype="multipart/form-data">

                    <!--Boton para pedir foto relacionada al empleo/---->
                    <div class="text-center">
                      <button type="button"  class="mb-3 mt-4 btn btn-info texto" data-toggle="modal" data-target="#myModalDos" style=" width: auto; height: 60px; text-align: center;" >Agregar/Ver foto</button>
                    </div>

                    <!--2. Creación de la ventana del modal -->
                    <div id="myModalDos" class="modal fade" role="dialog">

                      <!--3. Permite ver el contenido del modal -->
                      <div class="modal-dialog">
                        <!--4. Aquí se coloca en condenido del modal-->
                        <div class="modal-content">
                          <!--5. Cabecera del modal-->
                          <div class="modal-header">
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                            <h4 class="modal-title texto">Selecciona una foto.</h4>
                          </div>

                          <!--6. Cuerpo del modal-->
                          <div class="modal-body">
                            <div class="container">
                              <p  class="pchiquito"style="text-align:justify" ><strong>Instrucciones:</strong> <br> Haz clic en el botón "Seleccionar foto" para escoger tu foto. <br><b>Nota: </b>Luego de seleccionarla veras que aparece una vista previa de la foto en un apartado. Posteriormente da clic en el botón "Cerrar" y listo.</p>

                              <!--Botón: Permite seleccionar un archivo para subirlo a al registro del empleo center><input name="uploadedfile" type="file" role="button" style="border-radius: 50px;width: 130px;text-align: center;height: 45px7;" /><br></center> -->

                              <!--Botón: Muestra tu foto/segun-->
                              <div class="border border-light p-3 mb-4">
                                <div class="text-center">
                                  <input type="button" class="btn btn-primary subtitulo"  style="border-radius: 50px;width: auto;text-align: center;height: 45px7;" role="button" value="Seleccionar foto" onclick="document.getElementById('inpFile').click()">
                                  <input type="file" name="inpFile" id="inpFile" style="display: none;" accept="image/*">
                                  <center>
                                     <div class="image-preview" id="imagePreview">
                                       <img src="" alt="Image Preview" class="image-preview_image">
                                       <span class= "image-preview_default-text">Vista previa de la foto</span>
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
                    </div> <!--/Termina el modal de la foto-->
                    <br>

                    <!--Nombre del empleo/-->
                    <div class="form-group form-label-group">
                      <input class="form-control labelchiquita" type="text" id="empleo" name="empleo" placeholder="Nombre del Empleo" style="border-radius: 50px;"/>
                      <label class="labelchiquita" for="empleo">Nombre del empleo *</label>
                    </div>
                    <br>
                    <!--Nombre del empleador o empresa/-->
                    <div class="form-group form-label-group">
                      <input class="form-control labelchiquita" type="text" id="empleador" name="empleador" placeholder="Nombre del Empleador" style="border-radius: 50px;"/>
                      <label class="labelchiquita" for="empleo">Nombre del empleador *</label>
                    </div>
                    <br>
                    <!--Áreas y Especialidades del empleo-->
                    <div class="form-group row">
                      <!--Área del empleo-->
                      <div class="col-sm-6 mb-3 mb-sm-0"><label class="titulo"><strong>&nbsp;&nbsp;Área del empleo: *</strong></label>
                        <select class="form-control form-control" name="empArea" id="empArea" style="border-radius: 50px;">
                          <optgroup class="labelchiquita" label="This is a group">
                            <!--Nombre del área del empleo-->
                            <?php 
                              include 'assets/php/empleos.php'
                            ?>
                          </optgroup>
                        </select>
                      </div>

                      <!--Especialidad del empleo-->
                      <div class="col-sm-6">
                        <label class="titulo">&nbsp;&nbsp;Especialidad solicitada: </label>
                        <input class="form-control form-control-user labelchiquita" type="text" id="empEspecialidad" name="empEspecialidad" style="border-radius: 50px;"/>
                      </div>
                    </div>

                    <!--Salario y tipo de jornada-->
                    <div class="form-group row">

                      <!--Jornada-->
                      <div class="col-sm-6"><label class="titulo">&nbsp;&nbsp;Tipo de jornada: *</label><input class="form-control form-control-user labelchiquita my-2" type="text" id="jornada" name="jornada" style="border-radius: 50px;"/></div>

                      <!--Salario-->
                      <div class="col-sm-6"><label class="titulo">&nbsp;&nbsp;Salario: *</label><input class="form-control form-control-user labelchiquita my-2" type="number" id="salario" name="salario" style="border-radius: 50px;"/></div>
                    </div>
                    <br>
                    <!--Ubicación/-->
                    <div class="form-group form-label-group">
                      <input class="form-control labelchiquita" type="text" id="empUbicacion" name="empUbicacion" placeholder="Ubicación" style="border-radius: 50px;"/>
                      <label class="texto" for="ubicacion">Ubicación *</label>
                    </div>
                    <br>

                    <!--Descripcion-->
                    <div class="form-group form-label-group">
                      <textarea class="form-control labelchiquita" type="text" id="empDescripcion" name="empDescripcion" placeholder="Descripcion" style="border-radius: 18px; height: 200px;"></textarea>
                      <label class="texto" for="empdescripcion">Descripción del empleo *</label>
                    </div>
                    <br>
                    <!--Requisitos-->
                    <div class="form-group form-label-group">
                      <textarea class="form-control labelchiquita" type="text" id="empRequisitos" name="empRequisitos" placeholder="Requisitos" style="border-radius: 18px; height: 200px;"></textarea>
                      <label class="texto"for="empRequisitos">Descripción de tu personal *</label>
                    </div>
                    <br>

                    <!--Botones para cancelar o registrar un empleo-->
                    <div class="form-group row">

                      <!--Botón para registrar un empleo-->
                      <div class="col-sm-6">
                        <button class="btn btn-block text-white btn-user texto" style="background: #23B439; border-radius: 50px;"id="baccept" type="submit">Publicar</button><hr></div>

                        <!--Botón para cancelar un empleo-->
                        <div class="col-sm-6"><a href="empleos_usuarios.php" class="btn btn-block text-white btn-user texto" role="button" style="background: #EF5A10; border-radius: 50px;">Cancelar</a><hr></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!--Fin del contenedor principal-->

      <footer class="text-center text-lg-start text-white"  style="background: #000000;">
          <!-- Copyright -->
          <div class="text-center p-3 texto">
            © 2021 Copyright:
            <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
          </div>
      </footer>

      <!--Scripts-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
      <!-- js toastr -->
      <script src="assets/js/toastr.min.js"></script>
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

        <!--Scripts-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- Scripts de validacion de cada uno de los form_registrer

        La logica es:
          En caso de qu|e el usuario llene correctamente la primera parte
          se habilita el boton para que este no de dos veces clic

          y puede continuar con el registro -->
        <script type = "text/javascript">

          /* Los botones inician en un estado inicial deshabilitados */
          $(document).ready(function(){
            $("#baccept").prop("disabled",true);

            $("#empleoregister").validate({
              rules: {
                empleo: {
                  required: true,
                  minlength: 3
                },
                empleador: {
                  required: true,
                  minlength: 3
                },
                jornada: {
                  required: true,
                  minlength: 10
                },
                salario: {
                  required: true,
                  minlength: 5
                },
                empEspecialidad: {
                  minlength: 4
                },
                empUbicacion: {
                  required: true,
                  minlength: 15
                },
                empDescripcion: {
                  required: true,
                  minlength: 20
                },
                empRequisitos: {
                  required: true,
                  minlength: 20
                }
              },
              messages : {
                empleo: {
                  required: "Ingresa el nombre del empleo",
                  minlength: "<br><br>Al menos 3 letras debe de llevar el nombre del empleo"
                },
                empleador: {
                  required: "Ingresa nombre del empleador",
                  minlength: "<br><br>Al menos 3 letras debe de llevar el nombre del empleador"
                },
                jornada: {
                  required: "Ingresa el tipo de jornada",
                  minlength: "Al menos 10 caracteres debe llevar el tipo de jornada"
                },
                salario: {
                  required: "Ingresa el salario del empleo",
                  minlength: "Al menos 5 caracteres debe de llevar el salario"
                },
                empEspecialidad: {
                  minlength: "Al menos 4 caracteres debe de llevar la especialidad"
                },
                empUbicacion: {
                  required: "Ingresa la ubicación del empleo",
                  minlength: "<br><br>Al menos 15 caracteres debe de llevar la ubicación"
                },
                empDescripcion: {
                  required: "Ingresa la descripción del empleo",
                  minlength: "Al menos 15 letras debe de llevar la descripción"
                },
                empRequisitos: {
                  required: "Ingresa los requisitos del empleo",
                  minlength: "Al menos 15 caracteres debe de llevar los requisitos"
                }
              }
          });

          $('#empleoregister').bind('change keyup', function() {
              if($(this).validate().checkForm()) {
                  $('#baccept').prop('disabled', false);
              } else {
                  $('#baccept').prop('disabled', true);
              }
            });
          });
        </script>

        <script type="text/javascript">
          $(document).ready(function(){
            $("#empleoregister").submit(function(event){
              let inputs = new FormData(this);
              event.preventDefault();
              $.ajax({
                type: "POST",
                url: "assets/php/empleo_registro.php",
                data: inputs,
                cache:false,
                contentType: false,
                processData: false,
                success: function () {
                  toastr["success"]("Felicidades, el trabajo se agrego correctamente.", "Trabajo agregado.");
                },error:function () {
                  toastr["error"]("Lo siento, algo a salido mal y no se agrego el trabajo.", "Error.");
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

          inpFile.addEventListener("change", function(){
            const file = this.files[0];

            if (file) {
               const reader = new FileReader();
               previewDefaultText.style.display = "none";
               previewImage.style.display = "block";

               reader.addEventListener("load", function(){
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
    </body>
</html>
