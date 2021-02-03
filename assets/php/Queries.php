<?php
require('conection.php');
class Queries
{
    private $pdo;

    public function __construct()
    {
        $db = new DB();
        $this->pdo = $db->connect();
    }

    public function __destruct()
    {
        // close the database connection
        $this->pdo = null;
    }

    public function GetAreas()
    {
        $TABLE = 'area';
        $sql = "SELECT * FROM $TABLE";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function DatosUsuario($idUser)
    {
        // datos del usuario
        $VIEW = 'view_profile_privado';
        $query = "SELECT * FROM $VIEW WHERE usid = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$idUser]);
        return $stmt->fetch();
    }
}
