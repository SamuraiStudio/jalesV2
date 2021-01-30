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
        $this->host     = '162.241.60.205;port=3306'; // se asigna el valor al atributo host
        $this->db       = 'samurai1_eljale'; // se asigna el valor al atributo db
        $this->user     = "samurai1_admin"; // se asigna el valor al atributo user
        $this->password = "admineljale"; // se asigna el valor al atributo password
        // ?M+^y44Bh+Rq
    }

    function connect()
    { // funcion de coneccion
        // Se utiliza una excepcion
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db; // se conecta a la bd
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            // Se crea la conexion
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            // set the character set properly.
            $pdo->query('SET NAMES gbk');
            // retorna el resultado del objeto
            return $pdo;
        } catch (PDOException $e) { // se atrapa el error
            print_r('Error connection: ' . $e->getMessage()); // se imprime el error
        }
    }
}
