<?php
class DB
{ // Se crea la clase DB
    private $host; // atributo $host
    private $db; // atributo $db
    private $user; // atributo $user
    private $password; // atributo $password
    private $charset; // atributo $charset

    public function __construct()
    { // se crea el metodo constructor
        $this->host     = 'localhost'; // se asigna el valor al atributo host
        $this->db       = 'chambas'; // se asigna el valor al atributo db
        $this->user     = 'root'; // se asigna el valor al atributo user
        $this->password = ""; // se asigna el valor al atributo password
    }

    function connect()
    { // funcion de coneccion
        // Se utiliza una excepcion
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db; // se conecta a la bd
            // Se crea un array asociativo donde se guardan con PDO
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            // Se crea la conexion
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            // set the character set properly.
            $pdo->query('SET NAMES gbk');
            // retr=orna el resultado del objeto
            return $pdo;
        } catch (PDOException $e) { // se atrapa el error
            print_r('Error connection: ' . $e->getMessage()); // se imprime el error
        }
    }
}
