<?php //Reutilizador de Objetos del proyecto

require_once("colector.php");
class ObjectColector //instanciable
{

 private $modelo;
 public function __construct()
 {

 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();


 }


 //obtenemos usuarios de una tabla con postgreSql
public function ListarTabla($tabla)
	{
		try
		{
		    $result= $this->modelo->Listar($tabla);

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


 public function InsertObject($id, $nombre, $path)
 {
 try
		{
		    $result= $this->modelo->operacion("INSERT into demo (id, nombre, foto) values ('".$id."', '".$nombre."', '".$path."' )");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function UpdateObject($tabla,$id, $nombre, $path)
 {
 try
		{
		    $result= $this->modelo->operacion("UPDATE '.$tabla.' set nombre= '".$nombre."' , foto = '".$path."' WHERE id='".$id."' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function DeleteObject($tabla, $id)
 {
 try
		{
		     $result= $this->modelo->operacion("DELETE from '.$tabla.' WHERE id= '" . $id . "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function ConsultarNombre($tabla, $id){

 	try
		{
		    $result= $this->modelo->operacion("SELECT from '.$tabla.' WHERE id= '" . $id . "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }


 public function UltimoID($tabla){

 	try
		{
		    $result= $this->modelo->operacion( "SELECT count(*) FROM '.$tabla.' ");



			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }



}
 ?>
