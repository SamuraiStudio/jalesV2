<?php 
    session_start();
    $usid = $_SESSION['usuario']['id'];

    include('conection.php');
    $db = new DB();
    $pdo = $db->connect();

    echo("<pre>");
    print_r($_POST);
    echo("</pre>");

    echo("<pre>");
    print_r($_FILES);
    echo("</pre>");

    $empleo = $_POST['empleo'];
    $empleador = $_POST['empleador'];
    $empArea = $_POST['empArea'];
    $empEpecialidad = $_POST['empEspecialidad'];
    $jornada = $_POST['jornada'];
    $salario = $_POST['salario'];
    $empUbicacion = $_POST['empUbicacion'];
    $empDescripcion = $_POST['empDescripcion'];
    $empRequisitos = $_POST['empRequisitos'];
    $foto = 1; // Modificar

    $data = [
        'empleo' => $empleo,
        'empArea' => $empArea,
        'empDescripcion' => $empDescripcion,
        'empEspecialidad' => $empEpecialidad,
        'jornada' => $jornada,
        'salario' => $salario,
        'empUbicacion' => $empUbicacion,
        'empRequisitos' => $empRequisitos,
        'usid' => $usid,
        'foto' => $foto
    ];

    $sql = "INSERT INTO trabajos (nombre,arid,descripcion,espec,tipojor,sal,ubi,requisitos,usid,foto)
            VALUES(:empleo,:empArea,:empDescripcion,:empEspecialidad,:jornada,:salario,:empUbicacion,:empRequisitos,:usid,:foto)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
?>