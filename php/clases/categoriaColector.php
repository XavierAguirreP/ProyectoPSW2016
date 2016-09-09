<?php
   require_once ("../clases/colector.php");

   class categoriaColector {
	private $modelo;

	public function __construct(){
	   $this->modelo = new colector();
	}

	public function ReadCategoria(){
		try{
			$result = $this->modelo->Listar("categoria");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function InsertCategoria($descripcion_categoria, $nombre_categoria, $fk_estado){
		try{
			$result = $this->modelo->operacion("INSERT INTO categoria(id, descripcion, nombre, id_estado) values(DEFAULT, '".$descripcion_categoria."', '".$nombre_categoria."', '".$fk_estado."') ");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function UpdateCategoria($id_categoria, $descripcion_categoria, $nombre_categoria, $fk_estado){
		try{
			$result= $this->modelo->operacion("UPDATE categoria SET descripcion= '".$descripcion_categoria."', nombre='".$nombre_categoria."', id_estado='".$fk_estado."' WHERE id ='".$id_categoria."' ");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function DeleteCategoria($id_categoria){
		$flag = false;
		try{
			$result = $this->modelo->operacion("DELETE from categoria WHERE id = '".$id_categoria."' ");
			$flag = true;
			return $flag;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
   }
?>
