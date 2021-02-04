<?php

// respuesta al lado del cliente
$respuesta = [
    'duplicado' => false,
    'error' => true,
    'msg' => null
];

if (!empty($_POST['operacion'])) {
    include('conection.php');
    // Conecta a la bd
    $db = new DB();
    $pdo = $db->connect();

    // declaración de variables
    $sql;
    $stmt;
    $alerta;

    // elige operacion
    switch ($_POST['operacion']) {
        case 'existe_correo':
            $sql = "SELECT * FROM usuario WHERE correo = ?";
            $alerta =  '<div class="alert alert-danger">
                            <strong>Oh no!</strong>
                            Correo no disponible. Cámbialo, porfavor.
                        </div>';
            break;

        case 'existe_apodo':
            $sql = "SELECT * FROM usuario WHERE apodo = ?";
            $alerta =  '<div class="alert alert-danger">
                            <strong>Upps!</strong>
                            Apodo no disponible. Intenta con otro.
                        </div>';
            break;

        case 'existe_rfc':
            $sql = "SELECT * FROM usuario WHERE rfc = ?";
            $alerta =  '<div class="alert alert-danger">
                            <strong>Oh no!</strong>
                            RFC no disponible. Intenta con otro.
                        </div>';
            break;

        case 'existe_ine':
            $sql = "SELECT * FROM usuario WHERE ine = ?";
            $alerta =  '<div class="alert alert-danger">
                            <strong>Upss!</strong>
                            INE no disponible. Cámbiala, porfavor.
                        </div>';
            break;

        default:
            $respuesta['msg'] = 'Operación no encontrada';
            break;
    }

    // ejecuta declaración preparada
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$_POST['valor']])) {

        $respuesta['error'] = false;

         // analiza duplicado
        $duplicado = ($stmt->rowCount() > 0) ? true: false;

        // devuelve la alerta de duplicado
        if($duplicado) $respuesta['msg'] = $alerta;

        // respuesta de la consulta
        $respuesta['duplicado'] = $duplicado;
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
