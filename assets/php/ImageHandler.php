<?php
class ImageHandler
{

    private $IMG;
    private $pdo;
    private $generatedID;

    public function __construct($imageFile)
    {
        $this->IMG = $imageFile;
        $db = new DB();
        $this->pdo = $db->connect();
        $this->generatedID = 2;
    }

    public function __destruct()
    {
        // close the database connection
        $this->IMG = null;
        $this->pdo = null;
    }

    public function getId(){
        return $this->generatedID;
    }

    public function insertImagen()
    {

        $blob = fopen($this->IMG['tmp_name'], 'rb');

        $sql = "INSERT INTO imagen(name,type,size, data) VALUES(:name,:type,:size,:data)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':name', $this->IMG['name']);
        $stmt->bindParam(':type', $this->IMG['type']);
        $stmt->bindParam(':size', $this->IMG['size']);
        $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);

        if($stmt->execute()){
            $this->generatedID = $this->pdo->lastInsertId();
            return true;
        } 

        return false;       
    }

    function updateImagen($idImagen)
    {

        $blob = fopen($this->IMG['tmp_name'], 'rb');

        $sql = "UPDATE imagen
            SET name = :name,
                type = :type,
                size = :size,
                data = :data
            WHERE idimg = :id;";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':name', $this->IMG['name']);
        $stmt->bindParam(':type', $this->IMG['type']);
        $stmt->bindParam(':size', $this->IMG['size']);
        $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
        $stmt->bindParam(':id', $idImagen);

        return $stmt->execute();
    }

    public function selectImagen($idImagen) {

        $sql = "SELECT * FROM files WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(array(":id" => $idImagen));

        $imagen = $stmt->fetch();

        return $imagen;
        // return $imagen['data'];
    }
}
