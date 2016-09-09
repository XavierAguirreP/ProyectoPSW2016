<?php


	require_once("../clases/colector.php");

	class tipo_userCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarTipoUsuario(){

			try{

				$result = $this->modelo->Listar("tipo_usuario");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertTipoUsuario($descripcion){

			try{

				$result = $this->modelo->operacion("INSERT INTO tipo_usuario(descripcion) values('".$descripcion."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateTipoUsuario($id ,$descripcion){

			try{

				$result= $this->modelo->operacion("UPDATE tipo_usuario SET descripcion = '".$descripcion."' WHERE id ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeleteTipoUsuario($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from tipo_usuario WHERE id = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		

	}//END CLASS

?>