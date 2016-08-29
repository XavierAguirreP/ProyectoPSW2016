<?php //Reutilizador de Objetos del proyecto

require_once("../php/colector.php");
require_once("domicilio.php"); //Segun la tabla a Usar

class DomicilioColector //instanciable
{

 private $modelo;
 public function __construct()
 {

 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();


 }


 //obtenemos usuarios de una tabla con postgreSql
public function ListarDomicilios()
	{
		try
		{
      $tabla="domicilio";
		    $result= $this->modelo->Listar($tabla);

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


 public function InsertDomicilio($direccion)
 {
 try
		{
		    $result= $this->modelo->operacion("INSERT into domicilio (id, direccion_descriptiva, calle_principal, calle_secundaria, numeracion_casa) values ('".$direccion->getId()."', '".$direccion->getDireccionDescriptiva()."', '".$direccion->getCallePrincipal()."', '".$direccion->getCalleSecundaria()."', '".$direccion->getNumeracion()."' )");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function UpdateDomicilio($direccion)
 {
 try
		{
		    $result= $this->modelo->operacion("UPDATE '.domicilio.' set direccion_descriptiva= '".$direccion->getDireccionDescriptiva()."' , calle_principal = '".$direccion->getCallePrincipal()."' , calle_secundaria = '".$direccion->getCalleSecundaria()."' , numeracion_casa = '".$direccion->getNumeracion()."'  WHERE id='".$direccion->getId()."' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function DeleteDomicilio($id)
 {
 try
		{
		     $result= $this->modelo->operacion("DELETE from '.domicilio.' WHERE id= '" . $id. "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function ConsultarDomicilio($id){

 	try
		{
		    $result= $this->modelo->operacion("SELECT from '.domicilio.' WHERE id= '" . $id. "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }


 public function UltimoIDDomicilio(){

 	try
		{
		    $result= $this->modelo->operacion( "SELECT count(*) FROM '.domicilio.' ");



			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }



}
 ?>
