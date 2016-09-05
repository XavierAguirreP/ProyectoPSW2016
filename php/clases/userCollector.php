<?php


	require_once("../Proyect-Advance/clases/colector.php");

	class userCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarUsuario(){

			try{

				$result = $this->modelo->Listar("usuario");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertUsuario($nombre_user, $pass, $id_tipo_usuario, $id_rol){

			try{

				$result = $this->modelo->operacion("INSERT INTO usuario(nombre_usuario, contraseña, id_tipo_usuario, id_rol) values('".$nombre_user."', '".$pass."', '".$id_tipo_usuario."', '".$id_rol."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateUsuario($id ,$nombre_user, $pass, $id_tipo_usuario, $id_rol){

			try{

				$result= $this->modelo->operacion("UPDATE usuario SET nombre_usuario = '".$nombre_user."', contraseña = '".$pass."', id_tipo_usuario= '".$id_tipo_usuario."', id_rol= '".$id_rol."' WHERE id_usuario ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeleteUsuario($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from usuario WHERE id_usuario = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		

	}//END CLASS

?>