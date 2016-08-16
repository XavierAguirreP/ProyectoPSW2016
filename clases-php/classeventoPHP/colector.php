<?php
require_once("conexion.php");

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
            var_dump($result);
            $this->con->close_con();
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function operacion($cadena, $objetoClass)
	{
	    try
	    {
	    $stm =  $this->con->prepare($cadena)->execute($objetoClass);
        $stm->execute($objetoClass);
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
