<?php 



class conexion extends PDO {
 private $dbname = "hanya"; 
 private $host = "localhost";
  private $user = "postgres";
 private $pass = "root"; 
  private $port = "5432"; 
 private $dbh;
 
 public function __construct() 
 {
     try {
 
         $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");


echo 'conexion exitosa';

 
     } catch(PDOException $e) {
 
         echo  $e->getMessage(); 
 
     }
 
 }
 

 public function close_con() 
 {
 
     $this->dbh = null; 
 }
 
}

?>
