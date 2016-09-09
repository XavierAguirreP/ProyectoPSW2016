<?php


	require_once("../clases/colector.php");

	class personaColector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarPersona(){

			try{

				$result = $this->modelo->Listar("persona");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertPersona($cedula_identidad ,$nombres ,$apellido_paterno ,$apellido_materno ,$fecha_nacimiento ,$lugar_nacimiento ,$sexo ,$estado_civil){

			try{

				$result = $this->modelo->operacion("insert into persona (id, cedula_identidad, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, lugar_nacimiento, sexo, estado_civil) values(default,'$cedula_identidad','$nombres','$apellido_paterno','$apellido_materno','$fecha_nacimiento','$lugar_nacimiento','$sexo','$estado_civil') ");
echo "se inserto registro $nombres";











				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdatePersona($id, $cedula_identidad ,$nombres ,$apellido_paterno ,$apellido_materno ,$fecha_nacimiento ,$lugar_nacimiento ,$sexo ,$estado_civil){

			try{

				$result= $this->modelo->operacion("update persona set cedula_identidad= '$cedula_identidad', nombres='$nombres',apellido_paterno= '$apellido_paterno', apellido_materno= '$apellido_materno' ,fecha_nacimiento= '$fecha_nacimiento', lugar_nacimiento= '$lugar_nacimiento', sexo= '$sexo',estado_civil= '$estado_civil'  where id = $id");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}




	}//END UPDATE

		public function DeletePersona($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("delete from persona where id = $id");
				echo "se elimino registro $id, ejecute la consulta para verificar";






				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		

	}//END CLASS

?>
