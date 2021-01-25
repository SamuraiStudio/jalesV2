<?php

  include('conection.php');
  // Conecta a la bd
  $db = new DB();
  $pdo = $db->connect();
  $stmt;
  // Constante. Nombre de la tabla de usuarios
  $USER_TABLE = 'usuario';
    // Datos POST de entrada
     $apodo = $_POST['n_name'];
     $firsname = $_POST['nombre'];
     $lastnamep = $_POST['a_paterno'];
     $lastnamem = $_POST['a_materno'];
     $email = $_POST['email'];
     $contr = password_hash($_POST['cont'], PASSWORD_DEFAULT);
     $fecnaci = date("y-m-d", strtotime($_POST['fecha']));
     $arids = (int)$_POST['empArea'];
     $espid = $_POST['empEspecialidad'];
     $tel = $_POST['telefono'];
     $rfc = $_POST['rfc'];
     $ine = $_POST['ine'];
     $des = $_POST['descripcion'];
     $sex = $_POST['genero'];
     $nivel_usuario = 2;

      $query = "INSERT INTO $USER_TABLE
      (apodo, nom, app, apm, correo, cont, fecnac, arid, esp, telefono, sexo, rfc, ine, descripcion, nivid)
      VALUES (:apodo, :nom, :app, :apm, :correo, :cont, :fecnac, :arid, :esp,
      :tel, :sexo, :rfc, :ine, :des, :nivus)";
      // Arreglo asociativo con valores para execute()
      // Une el Script SQL con los datos
      $binding = [
        ':apodo' => $apodo,
        ':nom' => $firsname,
        ':app' => $lastnamep,
        ':apm' => $lastnamem,
        ':correo' => $email,
        ':cont' => $contr,
        ':fecnac' => $fecnaci,
        ':arid' => $arids,
        ':esp' => $espid,
        ':tel' => $tel,
        ':sexo' => $sex,
        ':rfc' => $rfc,
        ':ine' => $ine,
        ':des' => $des,
        ':nivus' => $nivel_usuario
      ];

      // Declaración preparada (evita inyecciones SQL)
      $stmt = $pdo->prepare($query);
      // Ejecuta la declaración
      $stmt->execute($binding);
