<?php

require_once("../clases/colector.php");


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
 
 
 public function InsertTelefono($numero, $id_estado)
 {
 	try
		{
		    $result= $this->modelo->operacion("INSERT INTO telefono(numero, id_estado) values('".$numero."','".$id_estado."' )");
                echo "se inserto registro  $numero";
                	return $result;
                }
	catch(Exception $e)
		{
			die($e->getMessage());
		}
 	}
 
 public function UpdateTelefono($id,$numero,$id_estado)
 {
 	try
		{
		    $result= $this->modelo->operacion("UPDATE telefono SET numero = '".$numero."',id_estado = '".$id_estado."' WHERE id ='".$id."' ");
                     
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

