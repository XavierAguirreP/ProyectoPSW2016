<?php //Reutilizador de Objetos del proyecto

require_once("../clases/colector.php");
require_once("../clases/cabeceraOrden.php"); //Segun la tabla a Usar

class CabeceraOrdenColector //instanciable
{

 private $modelo;
 public function __construct()
 {

 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();


 }


 //obtenemos usuarios de una tabla con postgreSql
public function ListarCabeceras()
	{
		try
		{
      $tabla="cabecera_orden_pedido";
		    $result= $this->modelo->Listar($tabla);

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


 public function InsertCabeceraOrden($cabecera)
 {
 try
		{
		    $result= $this->modelo->operacion("INSERT into cabecera_orden_pedido(id_cliente, fecha_emision, fecha_entrega, estado,iva) VALUES ('".$cabecera->getIdCliente()."', '".$cabecera->getFechaEmision()."', '".$cabecera->getFechaEntrega()."', '".$cabecera->getEstado()."', '".$cabecera->getIva()."' )");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function UpdateCabeceraOrden($cabecera)
 {
 try
		{
		    $result= $this->modelo->operacion("UPDATE '.cabecera_orden_pedido.' set id_cliente= '".$cabecera->getIdCliente()."' , fecha_emision = '".$cabecera->getFechaEmision()."' , fecha_entrega = '".$cabecera->getFechaEntrega()."' , estado = '".$cabecera->getEstado()."' , iva = '".$cabecera->getIva()."' WHERE id='".$cabecera->getId()."' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function DeleteCabeceraOrden($id)
 {
 try
		{
		     $result= $this->modelo->operacion("DELETE from '.cabecera_orden_pedido.' WHERE id= '" . $id . "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function ConsultarCabeceraOrden($id){

 	try
		{
		    $result= $this->modelo->operacion("SELECT from '.cabecera_orden_pedido.' WHERE id= '" . $id. "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }


 public function UltimoID(){

 	try
		{
		    $result= $this->modelo->operacion( "SELECT count(*) FROM '.cabecera_orden_pedido.' ");



			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }



}
 ?>
