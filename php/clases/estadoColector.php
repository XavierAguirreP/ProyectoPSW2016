<?php
   require_once ("../clases/colector.php");

   class estadoColector {
	private $modelo;

	public function __construct(){
	   $this->modelo = new colector();
	}

	public function ReadEstado(){
		try{
			$result = $this->modelo->Listar("estado");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function InsertEstado($descripcion_estado){
		try{
			$result = $this->modelo->operacion("INSERT INTO estado(descripcion) values('".$descripcion_estado."') ");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function UpdateEstado($id_estado, $descripcion_estado){
		try{
			$result= $this->modelo->operacion("UPDATE estado SET descripcion= '".$descripcion_estado."' WHERE id ='".$id_estado."' ");
			return $result;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function DeleteEstado($id_estado){
		$flag = false;
		try{
			$result = $this->modelo->operacion("DELETE from estado WHERE id = '".$id_estado."' ");
			$flag = true;
			return $flag;
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
   }
?>
