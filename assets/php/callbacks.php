<?php

// respuesta al lado del cliente
$respuesta = [
    'duplicado' => false,
    'error' => true,
    'msg' => null
];

if (!empty($_POST['op'])) {
    include('conection.php');
    // Conecta a la bd
    $db = new DB();
    $pdo = $db->connect();

    // declaración de variables
    $sql;
    $stmt;

    // elige operacion
    switch ($_POST['op']) {
        case 'existe_correo':
            $sql = "SELECT * FROM usuario WHERE correo = ?";
            break;

        case 'existe_apodo':
            $sql = "SELECT * FROM usuario WHERE apodo = ?";
            break;

        case 'existe_rfc':
            $sql = "SELECT * FROM usuario WHERE rfc = ?";
            break;

        case 'existe_ine':
            $sql = "SELECT * FROM usuario WHERE ine = ?";
            break;

        default:
            $respuesta['msg'] = 'Operación no encontrada';
            break;
    }

    // ejecuta declaración preparada
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$_POST['value']])) {

        // analiza duplicado
        $respuesta['duplicado'] = ($stmt->rowCount() > 0);
        $respuesta['error'] = false;
    } else {
        // Mensaje de error SQL
        $respuesta['msg'] = 'ErrorSQL: ' . $stmt->errorInfo();
    }

    // cierra la conexión 
    $pdo = null;
} else {
    $respuesta['msg'] = 'No hay operación especificada';
}

// imprime respuesta en formato JSON
echo json_encode($respuesta);
