<?php
include('conection.php');

// Conecta a la bd
$db = new DB();
$pdo = $db->connect();

sleep(1);
    if (isset($_POST)) {
        $apodo = (string)$_POST['n_name'];

        $query2 = "SELECT * FROM usuario WHERE apodo = ?";
        $stmp = $pdo->prepare($query2);
        $stmp->execute([$apodo]);

    if ($stmp->rowCount() > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario ya en existencia, cambialo porfavor.</div>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Nombre de usuario disponible, continua.</div>';
    }
}
?>
