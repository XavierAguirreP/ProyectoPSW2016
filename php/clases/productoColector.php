<?php
   require_once ("../clases/colector.php");

   class productoColector {
	private $modelo;

	public function __construct(){
	   $this->modelo = new colector();
	}

	public function ReadProducto(){
		try{
			$result = $this->modelo->Listar("producto");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function InsertProducto($descripcion_producto, $NON, $precio_producto, $sabor_masa, $sabor_relleno, $porcion, $fk_categoria){
		try{
			$result = $this->modelo->operacion("INSERT INTO producto(id, descripcion, foto, precio, sabor_masa, sabor_relleno, porcion, id_categoria) values(DEFAULT,'".$descripcion_producto."', '".$NON."', '".$precio_producto."', '".$sabor_masa."', '".$sabor_relleno."', '".$porcion."', '".$fk_categoria."') ");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function UpdateProducto($id_producto, $descripcion_producto, $NON, $precio_producto, $sabor_masa, $sabor_relleno, $porcion, $fk_categoria){
		try{
			$result= $this->modelo->operacion("UPDATE producto SET descripcion= '".$descripcion_producto."', foto= '".$NON."', precio= '".$precio_producto."', sabor_masa= '".$sabor_masa."', sabor_relleno= '".$sabor_relleno."', porcion= '".$porcion."', id_categoria='".$fk_categoria."' WHERE id ='".$id_producto."' ");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function DeleteProducto($id_producto){
		$flag = false;
		try{
			$result = $this->modelo->operacion("DELETE from producto WHERE id = '".$id_producto."' ");
			$flag = true;
			return $flag;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
   }
?>
