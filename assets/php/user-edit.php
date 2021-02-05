<?php
include('Consultas.php');
require('ImageHandler.php');
// Conecta a la bd
$db = new DB();
$pdo = $db->connect();

// objeto de respuesta a cliente
$jsonRes = [
    'exito' => false,
    'msg' => null
];
try {
    // verifica exista post
    if (isset($_POST['a_paterno'])) {

        // Constante. Nombre de la tabla de usuarios
        $USER_TABLE = 'usuario';
        $DIRECCION_TABLE = 'direccion';

        session_start();
        $usid = $_SESSION['usuario']['id'];

        // Datos POST de entrada
        $firsname = $_POST['nombre'];
        $lastnamep = $_POST['a_paterno'];
        $lastnamem = $_POST['a_materno'];
        $fecnaci = date("y-m-d", strtotime($_POST['fecha']));
        $arids = (int)$_POST['empArea'];
        $espid = $_POST['empEspecialidad'];
        $des = $_POST['descripcion'];
        $sex = $_POST['genero'];
        $facebook = $_POST['facebook'];
        $estado = $_POST['estado'];
        $ciudad = $_POST['ciudad'];

        // Obtiene las llaves foráneas de del usuario
        $consultas = new Consultas();
        $fks = $consultas->GetForaneasUsuario($usid);

        /* 
        Si el user subió imagen, se inserta la misma en la tabla correspondiente,
        posteriormente se toma el id de dicho registro. 
        Si no, se inserta el id default (2) de una imagen precargada en la bd.
        */
        if (is_uploaded_file($_FILES['inpFile']['tmp_name'])) {
            $imageHandler = new ImageHandler($_FILES['inpFile']);
            $imageHandler->updateImagen($fks['imgid']);
        }

        /* actualiza los valores de direccion en la tabla correspondiente*/
        $sql = "UPDATE $DIRECCION_TABLE 
                SET ciudad = :ciudad, estado = :estado
                WHERE iddir = :dirid";
        $valores = [
            ':ciudad' => $ciudad,
            ':estado' => $estado,
            ':dirid' => $fks['dirid']
        ];
        $declaracion = $pdo->prepare($sql);

        if (!$declaracion->execute($valores)) {
            throw new Exception($declaracion->errorInfo());
        }

        /* Actualiza en la tabla de usuario*/
        $query = "UPDATE $USER_TABLE
                SET nom =:nom, app = :app, apm = :apm, fecnac = :fecnac, arid = :arid, esp = :esp,
                sexo = :sexo, descripcion = :des, fblink = :fblink
                WHERE usuario.id = :usid";
        // Arreglo asociativo con valores para execute()
        // Une el Script SQL con los datos
        $binding = [
            ':nom' => $firsname,
            ':app' => $lastnamep,
            ':apm' => $lastnamem,
            ':fecnac' => $fecnaci,
            ':arid' => $arids,
            ':esp' => $espid,
            ':sexo' => $sex,
            ':des' => $des,
            ':fblink' => $facebook,
            ':usid' => $usid
        ];
        // Declaración preparada (evita inyecciones SQL)
        $stmt = $pdo->prepare($query);

        // Ejecuta la declaración
        if ($stmt->execute($binding)) {
            $jsonRes['exito'] = true;
        } else {
            throw new Exception($stmt->errorInfo());
        }
    } else {
        throw new Exception('No hay datos de entrada');
    }
} catch (PDOException $e) {
    $jsonRes['msg'] = $e->getMessage();
} catch (Exception $e) {
    $jsonRes['msg'] = $e->getMessage();
}
echo json_encode($jsonRes);
