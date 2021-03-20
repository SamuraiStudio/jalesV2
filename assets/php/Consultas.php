<?php
require_once('conection.php');
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
        $sql = "SELECT * FROM $TABLE INNER JOIN imagen WHERE imgar = idimg";
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

    public function GetSexos()
    {
        $sql = "SHOW COLUMNS FROM usuario LIKE 'sexo'";
        $result = $this->pdo->prepare($sql);
        $result->execute();
        $row = $result->fetch();
        $type = $row['Type'];
        preg_match('/enum\((.*)\)$/', $type, $matches);
        $vals = explode(',', $matches[1]);
        $trimmedvals = array();
        foreach ($vals as $key => $value) {
            $value = trim($value, "'");
            $trimmedvals[] = $value;
        }
        return $trimmedvals;
    }

    public function GetForaneasUsuario($idUser)
    {
        $sql = "SELECT arid, dirid, foto as imgid  FROM usuario WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$idUser]);
        return $stmt->fetch();
    }

    public function GetForaneasTrabajo($idTrabajo)
    {
        $sql = "SELECT arid, usid, foto  FROM trabajos WHERE idetrab = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$idTrabajo]);
        return $stmt->fetch();
    }

    public function getAllJobs(){
      $sql = "SELECT * FROM trabajos INNER JOIN imagen, area WHERE foto = idimg AND arid = area.id";
      if(isset($_POST['busqueda'])){
        $bus = $_POST['busqueda'];
        $sql.="AND trabajos.nombre LIKE = $bus";
      }
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function ComentariosVista($Userdir)
    {
        $query = "SELECT comentario, calif, apodo, uscoment.created_at AS fecha
            FROM uscoment
            JOIN usuario ON usiddo = usuario.id
            WHERE usiddir = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$Userdir]);
        return $stmt->fetchAll();
    }

    public function UsuarioVista($Uservista)
    {
        // datos del usuario
        $VIEW = 'view_profile_privado';
        $query = "SELECT * FROM $VIEW WHERE usid = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$Uservista]);
        return $stmt->fetch();
    }

    public function VerInteresados($idTrabajo)
    {
      $query = "SELECT apodo, arnom, esp, telefono, foto, interesado.userid
                FROM view_profile_privado
                JOIN interesado ON usid = interesado.userid
                WHERE interesado.trabid = ?";
      $stmt = $this->pdo -> prepare($query);
      $stmt -> execute([$idTrabajo]);
      return $stmt->fetchAll();
    }
}
