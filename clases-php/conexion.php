<?php 
class conexion extends PDO {
	private $dbname = "hanya"; //nombre base de datos
	private $host = "localhost";  //nombre servidor
	private $user = "postgres"; //nombre usuarios base de datos
	private $pass = "root"; //password usuario
	private $port = "5432"; //puerto postgreSql
	private $dbh;
 	
	//creamos la conexión a la base de datos prueba
 
	
	public function __construct() 
 	{
    	try{
			
			$this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
			echo 'Connected';
 
     	}catch(PDOException $e){
 
        	echo  $e->getMessage(); 
 
    	}
 
 	}
 
 //función para cerrar una conexión pdo
 public function close_con() 
 {
     $this->dbh = null; 
 }
 
}

?>
