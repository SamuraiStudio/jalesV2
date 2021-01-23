<?php
if (isset($_POST['email'])) {
    include('conection.php');
    // Conecta a la bd
    $db = new DB();
    $pdo = $db->connect();

    // datos entrantes
    $email = $_POST['email'];
    $password = $_POST['cont'];

    /* Ejecuta una sentencia preparada pasando un array de valores */
    $query = "SELECT cont, id, nivid, apodo, correo FROM usuario WHERE correo = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);

    // objecto de respuesta (JSON)
    $respuesta = ['datos_correctos' => false] ;
    // usuario encontrado
    if ($stmt->rowCount() > 0) {
        // Datos del usuario en arreglo asociativo
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // verifica contraseña 
        if (password_verify($password, $user['cont'])) {
            // inicia sesión
            session_start();
            // propiedades de la sesión del usuario
            $_SESSION['usuario']['id'] = $user['id'];
            $_SESSION['usuario']['nivel'] = $user['nivid'];
            $_SESSION['usuario']['apodo'] = $user['apodo'];
            $_SESSION['usuario']['correo'] = $user['correo'];
            // respuesta al cliente
            $respuesta['datos_correctos'] = true;
        }
    }
    // cierra la conexión 
    $pdo = null;
    // imprime respuesta en formato JSON
    echo json_encode($respuesta);
} else {
    echo "<h1>ño</h1>";
}
