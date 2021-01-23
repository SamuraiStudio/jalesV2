<?php
include('conection.php');

// Conecta a la bd
$db = new DB();
$pdo = $db->connect();

sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['correo'];

    $result = $pdo->query(
        'SELECT * FROM usuario WHERE correo = "'.strtolower($username).'"'
    );

    if ($result->fetchColumn() > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Correo electrónico ya en uso, cambialo porfavor.</div>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Correo electrónico disponible, continua.</div>';
    }
}
 ?>
