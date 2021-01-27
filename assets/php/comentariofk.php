<?php
include('conection.php');

// Conecta a la bd
$db = new DB();
$pdo = $db->connect();


if (isset($_POST)) {
    $idjefe = $_POST['jefe'];

    $query=
        'SELECT apodo FROM usuario WHERE id = "'.($idjefe).'"';
    $stmt = $pdo -> prepare($query);
    $stmt -> execute(array());
    foreach ($stmt as $result) {
      // code...
      echo $result['apodo'];
    }
  }
 ?>
