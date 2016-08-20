
<?php
	require_once "conexion.php";
	

	public class tipo {
		
	
		private $id_tipo;
		private $descripcion;

		

		public function __construct(){
    		}
  
		public function getId_tipo() {  
     		return $this->id_tipo;  
   		}  
   
		public function setId_tipo($id_tipo) {  
		$this->id_tipo = $id_tipo;  
   		}  
   
		public function getDescripcion() {  
		return $this->descripcion;  
		}  
   
		public function setDescripcion($descripcion) {  
     		$this->descripcion = $descripcion;  
   		}
	}


