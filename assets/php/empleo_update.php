<?php 
    const TRABAJOS_IMG_DEFAULT = 1;

    session_start();
    $usid = $_SESSION['usuario']['id'];

    include('Consultas.php');

    $consultas = new Consultas();
    $db = new DB();
    $pdo = $db->connect();


    
    $empleo = $_POST['empleo'];
    $empleador = $_POST['empleador'];
    $empArea = $_POST['empArea'];
    $empEpecialidad = $_POST['empEspecialidad'];
    $jornada = $_POST['jornada'];
    $salario = $_POST['salario'];
    $empUbicacion = $_POST['empUbicacion'];
    $empDescripcion = $_POST['empDescripcion'];
    $empRequisitos = $_POST['empRequisitos'];
    $idTrabajo = $_POST['idTrabajo'];
    // obtiene la id de imagen del registro (atributo foto)
    $idImagen = $consultas->GetForaneasTrabajo($idTrabajo)['foto'];

    if ($_FILES['inpFile']['name']) {
        require('ImageHandler.php');
        $imageHandler = new ImageHandler($_FILES['inpFile']);
        // analiza si insertar o actualizar
        if ($idImagen == TRABAJOS_IMG_DEFAULT) {
            $imageHandler->insertImagen();
            $idImagen = $imageHandler->getId();
        } else {
            $imageHandler->updateImagen($idImagen);
        }
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
        'idImagen' => $idImagen,
        'idTrab' => $idTrabajo
    ];
    

    $sql = "UPDATE trabajos SET nombre=:empleo, empleador=:empleador, arid=:empArea, descripcion=:empDescripcion, espec=:empEspecialidad, tipojor=:jornada, sal=:salario, ubi=:empUbicacion, requisitos=:empRequisitos, usid=:usid, foto=:idImagen WHERE idetrab=:idTrab";
    
    $stmt = $pdo->prepare($sql);

    // echo json_encode($data);

    if($stmt->execute($data)){
        echo true;
    }else{
        echo false;
    }
