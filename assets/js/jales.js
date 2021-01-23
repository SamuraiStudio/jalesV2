$('document').ready(function () {

    $('.desc-trigger').on('click', function(){
        // Obtiene el atributo id de la fila más cercana al clic
        var idetrab = $(this).closest('tr').attr('id');
        // XMLHttpRequest        
        $.ajax({
            url: "assets/php/queries/get-descripcion.php",
            type: "POST",
            // dato(s) a enviar
            data: {
                'idetrab': idetrab
            },
            // tipo de datos de retorno
            dataType: 'JSON', 
            // conexión exitosa con el servidor
            success: function (data) {
                // cambia el título del modal
                $('#modalTitulo').text(data['nom']);
                // cambia la descripción del cuerpo del modal
                $('#descripcionTrabajo').text(data['descripcion']);
                // muestra el modal
                $('#modalDescripcion').modal('show');
            },
            // error de conexión
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

});