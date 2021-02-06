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

    public function searchProducts(){
    		$sqlQuery = "SELECT * FROM ".$this->productTable." WHERE status = '1'";
    		if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
    			$sqlQuery .= "
    			AND price BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
    		}
    		if(isset($_POST["brand"])) {
    			$brandFilterData = implode("','", $_POST["brand"]);
    			$sqlQuery .= "
    			AND brand IN('".$brandFilterData."')";
    		}
    		if(isset($_POST["ram"])){
    			$ramFilterData = implode("','", $_POST["ram"]);
    			$sqlQuery .= "
    			AND ram IN('".$ramFilterData."')";
    		}
    		if(isset($_POST["storage"])) {
    			$storageFilterData = implode("','", $_POST["storage"]);
    			$sqlQuery .= "
    			AND storage IN('".$storageFilterData."')";
    		}
    		$sqlQuery .= " ORDER By price";
    		$result = mysqli_query($this->dbConnect, $sqlQuery);
    		$totalResult = mysqli_num_rows($result);
    		$searchResultHTML = '';
    		if($totalResult > 0) {
    			/*while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {*/
    			while ($row = mysqli_fetch_assoc($result)) {
    				$searchResultHTML .= '
    				<div class="col-sm-4 col-lg-3 col-md-3">
    				<div class="product">
    				<img src="images/'. $row['image'] .'"  alt="" class="img-responsive" >
    				<p align="center"><strong><a href="#">'. $row['name'] .'</a></strong></p>
    				<h4 style="text-align:center;" class="text-danger" >'. $row['price'] .'</h4>
    				<p>Camera : '. $row['camera'].' MP<br />
    				Brand : '. $row['brand'] .' <br />
    				RAM : '. $row['ram'] .' GB<br />
    				Storage : '. $row['storage'] .' GB </p>
    				</div>
    				</div>';
    			}
    		} else {
    			$searchResultHTML = '<h3>No se ha encontrado ningún producto..</h3>';
    		}
    		return $searchResultHTML;
    	}	
}
