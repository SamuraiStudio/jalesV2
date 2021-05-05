$(obtener_datos(1));

    //funcion para obtener todos los datos 
      function obtener_datos(page){
          //Variable para diferenciar ajax call 
          var usuarios = 1; //tipo de usuario pub/usr
          var usuario_id = $('#datoUsuario').val();
          console.log("El usid es "+usuario_id);
          var busqueda = $('#search').val(); //asignamos valor de search
          console.log(busqueda);
          //asignamos valores del array(checkboxes) a categorias
          var filtros = [];
          $('input[type=checkbox]:checked').each(function(){
            filtros.push($(this).val());
          });
          var categorias = filtros;
          console.log(categorias);
          $("#loader").show(); //muestra el gif de loading
        $.ajax({
                  url:'assets/php/ConsultasGAJ_handler.php',
                  type: 'POST',
                  data: {'search': busqueda, 'categorias':categorias, 'page':page, 'from':usuarios, 'userid':usuario_id},
              }) 
        .done(function(response){
                  console.log("-> "+response);
                  $("#loader").hide(); //esconde el gif de loading al traer datos
                  $("#card-data").html(response);
              })
      }
      /*$(document).ajaxStart(function(){
        $('#loader').show();
      }).ajaxStop(function(){
        $('#loader').hide();
      });*/
      // Everytime I write
      $(document).on('keyup','#search', function(){
        obtener_datos(1);
      });
      //Everytime I click
      $(document).on('click','input[type=checkbox]',function(){
        obtener_datos(1);
      });
      //Everytime I click on the page number or tag
      $(document).on('click','.page-link',function(){
        var page = $(this).data('page_number');
        obtener_datos(page);
      });
      //Everytime X cancel button on search is clicked
      $(document).on('input','#search', function(){
        if('' == this.value) {
          console.log("Mensaje temporal X button"); //Mensaje temporal
        }
        obtener_datos(1);
      });
      //This way I know which button is clicked
      function Interesado_click(clicked_id){
        console.log("Click Me interesa "+clicked_id);
        var boton = document.getElementById(clicked_id).textContent;
        if(boton == 'Interesado'){
          console.log("Ya esta interesado");
        }else{
          insertar_interesado(clicked_id);
          console.log("Apenas nos interesamos");
          document.getElementById(clicked_id).textContent = 'Interesado';
          document.getElementById(clicked_id).style.background = '#1597bb';
        }
      }
      //Insert on interesado table
      function insertar_interesado(job_id){
        $.ajax({
          url:'assets/php/insert_interesado.php',
          type: 'POST',
          data: {'jobid':job_id},
         }) 
        .done(function(response){
          if(response == true){
            console.log("Interesado agregado-> "+response); //mensaje de prueba
          }else{
            console.log("NO agregado-> "+response); //mensaje de prueba
          }
        })
      }