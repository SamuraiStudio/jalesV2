<?php 
    session_start();
    $usid = $_SESSION['usuario']['id'];

    include('conection.php');
    $db = new DB();
    $pdo = $db->connect();

    $trabajo_id = $_POST['jobid'];
    //$date = date('Y-m-d h:i:s');

    $data = [
        'trabid' => $trabajo_id,
        'userid' => $usid//,
        //'created_at' => $date
    ];

    $sql = "INSERT INTO interesado (trabid,userid,created_at)
            VALUES(:trabid,:userid,NOW())";
    
    $stmt = $pdo->prepare($sql);

    if($stmt->execute($data)){
        echo true;
    }else{
        echo false;
    }

?>