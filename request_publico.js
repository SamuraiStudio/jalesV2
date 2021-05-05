$(obtener_datos(1));

    //funcion para obtener todos los datos 
      function obtener_datos(page){
          //Variable para diferenciar ajax call 
          var publico = 0;
          //asignamos valor de search
          var busqueda = $('#search').val();
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
                  data: {'search': busqueda, 'categorias':categorias, 'page':page, 'from':publico},
                  //dataType: 'JSON',
              }) 
        .done(function(response){
                  console.log("-> "+response);
                  $("#loader").hide(); //esconde el gif de loading al traer datos
                  $("#card-data").html(response);
              })
      }

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
          console.log("Mensaje temporal X button"); //mensaje de prueba
        }
        obtener_datos(1);
      });
      //Ajax call for login/register
      $(document).on('click','#inicia',function(){
        $(location).attr('href', 'login.php');
      });
      $(document).on('click','#registra',function(){
        $(location).attr('href', 'register_user.php');
      });
      

