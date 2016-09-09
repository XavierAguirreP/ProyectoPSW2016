<?php


	require_once("../clases/colector.php");

	class clienteColector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarCliente(){

			try{

				$result = $this->modelo->Listar("cliente");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertCliente($correo_electronico, $id_estrato_social, $id_domicilio, $id_telefono, $id_estado){

			try{

				$result = $this->modelo->operacion("insert into cliente (id, correo_electronico, id_estrato_social, id_domicilio, id_telefono, id_estado) values(default,'$correo_electronico','$id_estrato_social','$id_domicilio','$id_telefono','$id_estado') ");
echo "se inserto registro $correo_electronico";

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateCliente($id, $correo_electronico, $id_estrato_social, $id_domicilio, $id_telefono, $id_estado){

			try{

				$result= $this->modelo->operacion("update cliente set correo_electronico= '$correo_electronico', id_estrato_social='$id_estrato_social', id_domicilio= '$id_domicilio', id_telefono= '$id_telefono' , id_estado= '$id_estado' where id = $id");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}




	}//END UPDATE

		public function DeleteCliente($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("delete from cliente where id = $id");
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
