<?php //Reutilizador de Objetos del proyecto

require_once("colector.php");
require_once("detalleOrden.php"); //Segun la tabla a Usar

class DetalleOrdenColector //instanciable
{

 private $modelo;
 public function __construct()
 {

 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();


 }


 //obtenemos usuarios de una tabla con postgreSql
public function ListarDetalles()
	{
		try
		{
      $tabla="detalle_orden";
		    $result= $this->modelo->Listar($tabla);

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


 public function InsertDetalleOrden($detalle)
 {
 try
		{
		    $result= $this->modelo->operacion("INSERT into det_orden_perdido(id_cabecera_orden, id_producto, cantidad, subtotal) VALUES ('".$detalle->getIdCabecera()."', '".$detalle->getIdProducto()."', '".$detalle->getCantidad()."', '".$detalle->getSubtotal()."' )");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

/* public function UpdateDetalleOrden($detalle)
 {
 try
		{
		    $result= $this->modelo->operacion("UPDATE '.det_orden_perdido.' set id_producto = '".$detalle->getIdProducto()."' , cantidad = '".$detalle->getCantidad()."' , subtotal = '".$detalle->getSubtotal()."', linea= '".$detalle->getLinea()."' WHERE id_cabecera_orden='".$detalle->getIdCabecera()."' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function DeleteDetalleOrden($detalle)
 {
 try
		{
		     $result= $this->modelo->operacion("DELETE from '.det_orden_perdido.' WHERE id_cabecera_orden= '" . $detalle->getIdCabeceraOrden() . "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
*/
 public function ConsultarDetalleOrden($id_cabecera_orden){

 	try
		{
		    $result= $this->modelo->operacion("SELECT from '.det_orden_perdido.' WHERE id_cabecera_orden= '" . $id_cabecera_orden. "' ");

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
		    $result= $this->modelo->operacion( "SELECT count(*) FROM '.det_orden_perdido.' ");



			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }



}
 ?>
