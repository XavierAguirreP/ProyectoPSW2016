<?php
require_once("conexion.php");
require_once("telefono.php");


class colector
{
 
 private $con;
 public function __construct()
 {
 
 
 $this->con = new conexion();
 
 }
public function Listar($table)
	{
		try
		{
			$result = array();
			$cadena = "SELECT * FROM ".$table;
            
            echo $cadena;
			$stm = $this->con->prepare($cadena);
			$stm->execute();
			
			$result = $stm->fetchAll(PDO::FETCH_CLASS, $table);
            
            $this->con->close_con();
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function operacion($cadena)
	{
	    try
	    {
	    $stm =  $this->con->prepare($cadena);
        $stm->execute();
        $count = $stm->rowCount();
        
		
         $this->con->close_con();
        return $count;
        
	    }
	    catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
}
 ?>
