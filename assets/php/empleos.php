<?php 
    include 'conection.php';

    $db = new DB();
    $pdo = $db->connect();

    
    $sql="Select * from area";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); 

    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($arr as $row){
        echo '<option value="'. $row['id'] .'">' . $row['nombre'] . '</option>';
    }
?>