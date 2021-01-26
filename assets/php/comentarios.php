<?php

  include('conection.php');
  // Conecta a la bd
  $db = new DB();
  $pdo = $db->connect();
  $stmt;
  $usiddo;
  // Constante. Nombre de la tabla de usuarios
  $USER_TABLE = 'uscoment';
     /*
     $usiddir = $_GET['id'];
     // Datos POST de entrada*/

     $usiddir = 62;
     $usiddo = $_POST['usiddo'];//$_POST['usiddo'];
     $comentario = $_POST['coment'];
     $calif = $_POST['estrellas'];


      $query = "INSERT INTO $USER_TABLE
      (usiddir, usiddo, comentario, calif)
      VALUES (:usiddir, :usiddo, :comentario, :calif)";
      // Arreglo asociativo con valores para execute()
      // Une el Script SQL con los datos
      $binding = [
        ':usiddir' => $usiddir,
        ':usiddo' => $usiddo,
        ':comentario' => $comentario,
        ':calif' => $calif
      ];

      // Declaración preparada (evita inyecciones SQL)
      $stmt = $pdo->prepare($query);
      // Ejecuta la declaración
      $stmt->execute($binding);
