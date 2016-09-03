<?php

require_once("colector.php");
require_once("telefono.php");

class telefonoColector

{
 
 private $modelo;
 public function __construct()
 {
 
 $this->modelo = new colector();
 
 
 }
 
public function ListarTelefono()
	{
		try
		{
		    $result= $this->modelo->Listar("telefono");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertTelefono($numero)
 {
 	try
		{
		    $result= $this->modelo->operacion("INSERT INTO telefono(numero) values('".$numero."')");
                echo "se inserto registro  $numero";
                	return $result;
                }
	catch(Exception $e)
		{
			die($e->getMessage());
		}
 	}
 
 public function UpdateTelefono($id,$numero)
 {
 	try
		{
		    $result= $this->modelo->operacion("UPDATE telefono SET numero = '".$numero."' WHERE id ='".$id."' ");
                     
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteTelefono($id)

 {
$flag = false;
 try
		{
		     $result= $this->modelo->operacion("DELETE from telefono WHERE id = '".$id."' ");
                        
			//EXPerimental
			$flag = true;               
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	 }
    }

 ?>

