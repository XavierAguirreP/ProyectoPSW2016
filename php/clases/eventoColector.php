<?php

require_once("../clases/colector.php");


class eventoColector

{
 
 private $modelo;
 public function __construct()
 {
 
 $this->modelo = new colector();
 
 
 }
 
public function ListarEvento()
	{
		try
		{
		    $result= $this->modelo->Listar("evento");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertEvento($tipo_evento, $nombre_tematica, $descripcion, $fecha_evento, $precio, $num_personas)
 {
 	try
		{
		    $result= $this->modelo->operacion("INSERT INTO evento(tipo_evento, nombre_tematica, descripcion, fecha_evento, precio, num_personas) values('".$tipo_evento."','".$nombre_tematica."','".$descripcion."','".$fecha_evento."','".$precio."','".$num_personas."')");
                echo "se inserto registro $nombre_tematica";
                	return $result;
                }
	catch(Exception $e)
		{
			die($e->getMessage());
		}
 	}
 
 public function UpdateEvento($id,$tipo_evento,$nombre_tematica,$descripcion,$fecha_evento,$precio,$num_personas)
 {
 	try
		{
		    $result= $this->modelo->operacion("UPDATE evento SET tipo_evento = '".$tipo_evento."', nombre_tematica = '".$nombre_tematica."', descripcion = '".$descripcion."', fecha_evento= '".$fecha_evento."', precio= '".$precio."', num_personas= '".$num_personas."' WHERE id ='".$id."' ");
                     
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteEvento($id)

 {
$flag = false;
 try
		{
		     $result= $this->modelo->operacion("DELETE from evento WHERE id = '".$id."' ");
                        
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

