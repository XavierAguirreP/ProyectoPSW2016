<?php


	require_once("../clases/colector.php");

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

				$result = $this->modelo->operacion("INSERT INTO usuario(nombre_usuario, pass, id_tipo_usuario, id_rol) values('".$nombre_user."', '".$pass."', '".$id_tipo_usuario."', '".$id_rol."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateUsuario($id ,$nombre_user, $pass, $id_tipo_usuario, $id_rol){

			try{

				$result= $this->modelo->operacion("UPDATE usuario SET nombre_usuario = '".$nombre_user."', pass= '".$pass."', id_tipo_usuario= '".$id_tipo_usuario."', id_rol= '".$id_rol."' WHERE id ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeleteUsuario($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from usuario WHERE id = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		// PROCESO DE LOGIN

		public function Captura_USR_PASS($id,$pass){

			try{

				$result = $this->modelo->operacion("SELECT nombre_usuario, pass FROM usuario where nombre_usuario='".$id."' AND pass='".$pass."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END CAPTURA

		

	}//END CLASS

?>