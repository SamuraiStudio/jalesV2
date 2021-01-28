<?php

class ImageHandler
{

    private $FILE;
    private $pdo;

    public function __construct($imageFile)
    {
        $this->FILE = $imageFile;
        $db = new DB();
        $this->pdo = $db->connect();
    }
    public function __destruct()
    {
        // close the database connection
        $this->FILE = null;
        $this->pdo = null;
    }

    public function insertImagen()
    {

        $blob = fopen($this->FILE['tmp_name'], 'rb');

        $sql = "INSERT INTO imagen(name,type,size, data) VALUES(:name,:type,:size,:data)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':name', $this->FILE['name']);
        $stmt->bindParam(':type', $this->FILE['type']);
        $stmt->bindParam(':size', $this->FILE['size']);
        $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);

        return $stmt->execute();
    }

    function updateImagen($idImagen)
    {

        $blob = fopen($this->FILE['tmp_name'], 'rb');

        $sql = "UPDATE imagen
            SET name = :name,
                type = :type,
                size = :size,
                data = :data
            WHERE idimg = :id;";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':name', $this->FILE['name']);
        $stmt->bindParam(':type', $this->FILE['type']);
        $stmt->bindParam(':size', $this->FILE['size']);
        $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
        $stmt->bindParam(':id', $idImagen);

        return $stmt->execute();
    }

    public function selectBlob($idImagen) {

        $sql = "SELECT mime,
                        data
                   FROM files
                  WHERE idimg = :id;";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(":id" => $idImagen));
        $stmt->bindColumn(1, $mime);
        $stmt->bindColumn(2, $data, PDO::PARAM_LOB);

        $stmt->fetch(PDO::FETCH_BOUND);

        return array("mime" => $mime,
            "data" => $data);
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
