<?php


	require_once("../clases/colector.php");

	class estratoColector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarEstrato(){

			try{

				$result = $this->modelo->Listar("estrato_social");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertEstrato($descripcion ){

			try{

				$result = $this->modelo->operacion("insert into estrato_social (id, descripcion) values(default,'$descripcion') ");
echo "se inserto registro $descripcion";


				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateEstrato($id, $descripcion){

			try{

				$result= $this->modelo->operacion("update estrato_social set descripcion= '$descripcion' where id = $id");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}




	}//END UPDATE

		public function DeleteEstrato($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("delete from estrato_social where id = $id");
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
