<?php

require_once("colector.php");
require_once("historial_order.php");

class historialColector

{
 
 private $modelo;
 public function __construct()
 {
 
 $this->modelo = new colector();
 
 
 }
 
public function ListarHistorial()
	{
		try
		{
		    $result= $this->modelo->Listar("historial_order");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertHistorial($linea, $id_cabecera_order)
 {
 	try
		{
		    $result= $this->modelo->operacion("INSERT INTO historial(linea, id_cabecera_order) values('".$linea."','".$id_cabecera_order."')");
                echo "se inserto registro $linea";
                	return $result;
                }
	catch(Exception $e)
		{
			die($e->getMessage());
		}
 	}
 
 public function UpdateHistorial($id_cliente,$linea,$id_cabecera_order)
 {
 	try
		{
		    $result= $this->modelo->operacion("UPDATE historial_order SET linea = '".$linea."', id_cabecera_order = '".$id_cabecera_order."'WHERE id_cliente ='".$id_cliente."' ");
                     
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteHistorial($id_cliente)

 {
$flag = false;
 try
		{
		     $result= $this->modelo->operacion("DELETE from historial_order WHERE id_cliente = '".$id_cliente."' ");
                        
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

