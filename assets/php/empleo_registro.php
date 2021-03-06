<?php 
    session_start();
    $usid = $_SESSION['usuario']['id'];

    include('conection.php');
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
    
    if($_FILES['inpFile']['name']){
        require('ImageHandler.php');
        $imageHandler = new ImageHandler($_FILES['inpFile']);
        $imageHandler->insertImagen();
        $idImagen = $imageHandler->getId();
    }else{
        $idImagen = 2;
    }

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


    if($stmt->execute($data)){
        echo true;
    }else{
        echo false;
    }


?>