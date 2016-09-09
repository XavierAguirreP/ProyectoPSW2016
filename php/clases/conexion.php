<?php 
class conexion extends PDO {
	private $dbname = "d3rcn9tf0th43c"; //nombre base de datos
	private $host = "ec2-54-163-239-218.compute-1.amazonaws.com";  //nombre servidor
	private $user = "ucbwkgsngyrwzc"; //nombre usuarios base de datos
	private $pass = "Q-NmYFBn7VOzcMSAdsoUxNJqYP"; //password usuario
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
