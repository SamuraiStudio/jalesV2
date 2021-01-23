<!-- 
    Este archivo permite al usuario acceder a su escritorio, con el fin de seleccionar una fotografía y la suba en su registro 
-->
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
    " ha sido subido";
    echo "<img src='uploads/$file_name' >";
} else{
    echo "Ha ocurrido un error, trate de nuevo!";
}

