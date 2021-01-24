<!--  SITIO - EDITOR DE UN EMPLEO O TRABAJO  REALIZADO POR UN USUARIO.  -->

<!DOCTYPE html>
<html>

  <!--ENCABEZADO-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!--Icono del navegador-->
    <link rel="icon" type="image/png" href="assets/img/Logo/color.png">
    <title>Edita tu empleo</title>

    <!--Enlaces-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/floating-labels.min.css">
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

    <!--Menu -->
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
                  <div class="container texto" style="background: #F0F0F0;"><br>
                    <h2 class="text-dark" style="text-align: center;"><strong> Edita tu empleo </strong></h2><br>
                  </div>

                  <!-- Formulario para editar un empleo -->
                  <form id="empleoedit" enctype="multipart/form-data">

                    <!--Boton para pedir foto relacionada al empleo/---->
                    <div class="text-center">
                      <button type="button"  class="mb-3 mt-4 btn btn-info texto" data-toggle="modal" data-target="#myModalDos" style=" width: auto; height: 60px; text-align: center;" >Ver/Cambiar Foto</button>
                    </div>

                    <!--2. Creación de la ventana del modal -->
                      <div id="myModalDos" class="modal fade" role="dialog">
                        <!--3. Permite ver el contenido del modal -->

                          <div class="modal-dialog">
                          <!--4. Aquí se coloca en condenido del modal-->
                            <div class="modal-content">
                              <!--5. Cabecera del modal-->
                                <div class="modal-header texto">
                                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                  <h4 class="modal-title">Selecciona una foto.</h4>
                                </div>

                                <!--6. Cuerpo del modal-->
                                <div class="modal-body">
                                  <div class="container">
                                    <p class="pchiquito" style="text-align:justify" >Instrucciones: <br> Haz clic en el botón "Seleccionar foto" para escoger tu foto. <br><b>Nota: </b>Luego de seleccionarla veras que aparece una vista previa de la foto en un apartado. Posteriormente da clic en el botón "Cerrar" y listo.</p>

                                    <!--Botón: Permite seleccionar un archivo para subirlo a al registro del empleo center><input name="uploadedfile" type="file" role="button" style="border-radius: 50px;width: 130px;text-align: center;height: 45px7;" /><br></center> -->

                                    <!--Botón: Muestra tu foto/segun-->
                                    <div class="border border-light p-3 mb-4">
                                      <div class="text-center texto">
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
                                <div class="modal-footer texto">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div> <!--/Termina el modal de la foto-->
                          <br>

                          <!--Nombre del empleo/-->
                          <div class="form-group texto">
                            <label>&nbsp;&nbsp;<strong>Nombre del empleo*</strong></label>
                            <input class="form-control" type="text" id="empleo" name="empleo" value="Encargado de compras" style="border-radius: 50px;"/>
                          </div>
                          <br>

                          <!--Nombre del empleador o empresa/-->
                          <div class="form-group texto">
                            <label>&nbsp;&nbsp;<strong>Nombre del empleador o empresa*</strong></label>
                            <input class="form-control" type="text" id="empleador" name="empleador" value="Comercializadora García" style="border-radius: 50px;"/>
                          </div>
                          <br>

                          <!--Áreas y Especialidades del empleo-->
                          <div class="form-group row texto">

                            <!--Área del empleo-->
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <label>&nbsp;&nbsp;<strong>Área del empleo:*</strong></label>
                              <select class="form-control form-control" name="empArea" id="empArea" style="border-radius: 50px;">
                                <optgroup label="This is a group">

                                  <!--Nombre del área del empleo-->
                                  <option value="12" selected="">This is item 1</option>
                                  <option value="13">This is item 2</option>
                                  <option value="14">This is item 3</option>
                                </optgroup>
                              </select>
                            </div>

                            <!--Especialidad del empleo-->
                            <div class="col-sm-6">
                              <label>&nbsp;&nbsp;<strong>Especialidad solicitada:</strong></label>
                              <input class="form-control form-control-user" type="text" value="Compras internacionales" id="empEspecialidad" name="empEspecialidad" style="border-radius: 50px;"/>
                            </div>
                          </div>
                          <br>

                          <!--Salario y tipo de jornada-->
                          <div class="form-group row texto">

                            <!--Jornada-->
                            <div class="col-sm-6"><label>&nbsp;&nbsp;<strong>Tipo de jornada:*</strong></label><input class="form-control form-control-user" type="text" value="Jornada Completa" id="jornada" name="jornada" style="border-radius: 50px;"/></div>

                            <!--Salario-->
                            <div class="col-sm-6"><label>&nbsp;&nbsp;<strong>Salario:*</strong></label><input class="form-control form-control-user" type="text" value="$9,500.00 mensuales" id="salario" name="salario" style="border-radius: 50px;"/></div>
                          </div>
                          <br>

                          <!--Ubicación-->
                          <div class="form-group texto">
                            <label>&nbsp;&nbsp;<strong>Ubicación*</strong></label>
                            <input class="form-control" type="text" id="empUbicacion" name="empUbicacion" value="Avenida industrial #200, Colonia Ramos" style="border-radius: 50px;"/>
                          </div>
                          <br>

                          <!--Descripcion-->
                          <div class="form-group">
                            <label class="texto">&nbsp;&nbsp;<strong>Descripción*</strong></label>
                            <textarea class="form-control labelchiquita" type="text" id="empDescripcion" name="empDescripcion" style="border-radius: 18px; height: 200px;">Gestionar las compras de materia prima
                            Realizar compras directas e indirectas, papelería, insumos varios
                            Búsqueda de nuevos proveedores para compra de materiales
                            Realización de ordenes de compra</textarea>
                          </div>
                          <br>

                          <!--Requisitos-->
                          <div class="form-group">
                            <label class="texto">&nbsp;&nbsp;<strong>Requisitos de tu personal*</strong></label>
                            <textarea class="form-control labelchiquita" type="text" id="empRequisitos" name="empRequisitos" style="border-radius: 18px; height: 200px;">Educación mínima: Educación superior - Licenciatura
                            Años de experiencia: 1
                            Edad: 23-50
                            Disponibilidad de viajar: Si
                            Disponibilidad de cambio de residencia: Si</textarea>
                          </div>
                          <br>

                          <!--Botones para cancelar o registrar un empleo-->
                          <div class="form-group row texto">

                            <!--Botón para registrar un empleo-->
                            <div class="col-sm-6"><button class="btn btn-block text-white btn-lg" style="background: #23B439; border-radius: 50px;"id="baccept" type="submit">Publicar</button><hr></div>

                            <!--Botón para cancelar un empleo-->
                            <div class="col-sm-6"><a href="empleos_usuarios.php" class="btn btn-block text-white btn-lg" role="button"  style="background: #EF5A10; border-radius: 50px;">Cancelar</a><hr></div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div><!--Fin del contenedor principal-->

        <footer class="text-center text-lg-start text-white" style="background: #000000;">
            <!-- Copyright -->
            <div class="text-center p-3 texto" >
              ©️ 2021 Copyright:
              <a class="text-white" href="https://samuraistudio.com.mx/" target="_blank">Samurai Studio</a>
            </div>
        </footer>
        <!--Scripts-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script> <!-- Íconos -->
        <script src="assets/js/jquery.validate.js"></script> <!-- Vlaidaciones (alertas) -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/toastr.min.js"></script>
        <!-- Scripts de validacion de cada uno de los form_registrer

        La logica es:
          En caso de qu|e el usuario llene correctamente la primera parte
          se habilita el boton para que este no de dos veces clic

          y puede continuar con el registro -->
        <script type = "text/javascript">

        /* Los botones inician en un estado inicial deshabilitados */
        $(document).ready(function(){
            $("#empleoedit").validate({
                rules: {
                  empleo: {
                    minlength: 3
                  },
                  empleador: {
                    minlength: 3
                  },
                  jornada: {
                    minlength: 10
                  },
                  salario: {
                    minlength: 5
                  },
                  empUbicacion: {
                    minlength: 15
                  },
                  empDescripcion: {
                    minlength: 20
                  },
                  empRequisitos: {
                    minlength: 20
                  }
                },
                messages : {
                  empleo: {
                    minlength: "Al menos 3 letras debe de llevar el empleo."
                  },
                  empleador: {
                    minlength: "Al menos 3 letras debe de llevar el nombre del empleador o empresa."
                  },
                  jornada: {
                    minlength: "Al menos 10 caracteres debe llevar el tipo de jornada."
                  },
                  salario: {
                    minlength: "Al menos 5 caracteres debe de llevar el salario."
                  },
                  empUbicacion: {
                    minlength: "Al menos 15 caracteres debe de llevar la ubicación."
                  },
                  empDescripcion: {
                    minlength: "Al menos 20 letras debe de llevar la descripción."
                  },
                  empRequisitos: {
                    minlength: "Al menos 20 caracteres debe de llevar los requisitos."
                  }
                }
            });
          });

        </script>

        <script type="text/javascript">
          $(document).ready(function(){
            //Next hacia c2
            $("#baccept").click(function(){
              event.preventDefault();
              if( ($('#empleo').val() == '') || ($('#empleador').val() == '') || ($('#jornada').val() == '') || ($('#salario').val() == '') ||
                  ($('#empUbicacion').val() == '') || ($('#empDescripcion').val() == '') || ($('#empRequisitos').val() == '')) {
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
              }else{
                event.preventDefault();
                $(location).attr('href', 'publicaciones_user.php');
              }
            });
          });
        </script>

        <script type="text/javascript">
        $(document).ready(function(){
          $("#baccept").click(function(){
            event.preventDefault();
          });
        });
      </script>

      <script type="text/javascript">
        if ($(window).width() > 992) {
          $(window).scroll(function(){
            if ($(this).scrollTop() > 40) {
              $('#navbar_top').addClass("fixed-top");
              // add padding top to show content behind navbar
              $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
              $('#navbar_top').removeClass("fixed-top");
              // remove padding top from body
              $('body').css('padding-top', '0');
            }
          });
        } // end if
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
