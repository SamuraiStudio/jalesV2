<?php 
    session_start();
    $usid = $_SESSION['usuario']['id'];

    include('conection.php');
    require('ImageHandler.php');
    $db = new DB();
    $pdo = $db->connect();
    
    // echo 'hola';

    $empleo = $_POST['empleo'];
    $empleador = $_POST['empleador'];
    $empArea = $_POST['empArea'];
    $empEpecialidad = $_POST['empEspecialidad'];
    $jornada = $_POST['jornada'];
    $salario = $_POST['salario'];
    $empUbicacion = $_POST['empUbicacion'];
    $empDescripcion = $_POST['empDescripcion'];
    $empRequisitos = $_POST['empRequisitos'];

    $imageHandler = new ImageHandler($_FILES['inpFile']);
    $imageHandler->insertImagen();
    $idImagen = $imageHandler->getId();
    
    
    $data = [
        'empleo' => $empleo,
        'empleador' => $empleador,
        'empArea' => $empArea,
        'empDescripcion' => $empDescripcion,
        'empEspecialidad' => $empEpecialidad,
        'jornada' => $jornada,
        'salario' => $salario,
        'empUbicacion' => $empUbicacion,
        'empRequisitos' => $empRequisitos,
        'usid' => $usid,
        'idImagen' => $idImagen
    ];
    

    $sql = "INSERT INTO trabajos (nombre,empleador,arid,descripcion,espec,tipojor,sal,ubi,requisitos,usid,foto)
            VALUES(:empleo,:empleador,:empArea,:empDescripcion,:empEspecialidad,:jornada,:salario,:empUbicacion,:empRequisitos,:usid,:idImagen)";
    
    $stmt = $pdo->prepare($sql);


    $stmt->execute($data);

?>