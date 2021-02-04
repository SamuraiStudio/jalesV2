<?php
require('conection.php');
class Consultas
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

    public function ComentariosUsuario($idUser)
    {
        $query = "SELECT comentario, calif, apodo, uscoment.created_at AS fecha
            FROM uscoment
            JOIN usuario ON usiddo = usuario.id
            WHERE usiddir = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$idUser]);
        return $stmt->fetchAll();
    }
}
