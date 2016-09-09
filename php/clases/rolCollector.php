<?php


	require_once("../clases/colector.php");

	class rolCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarRoles(){

			try{

				$result = $this->modelo->Listar("roles");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertRoles($crear, $consultar, $actualizar, $eliminar){

			try{

				$result = $this->modelo->operacion("INSERT INTO roles(crear, consultar, actualizar, eliminar) values('".$crear."', '".$consultar."', '".$actualizar."', '".$eliminar."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateRoles($id, $crear, $consultar, $actualizar, $eliminar){

			try{

				$result= $this->modelo->operacion("UPDATE roles SET crear = '".$crear."', consultar= '".$consultar."', actualizar= '".$actualizar."', eliminar= '".$eliminar."' WHERE id ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeleteRoles($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from roles WHERE id = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		

	}//END CLASS

?>