
<?php
	require_once "conexion.php";
	

	public class categoria {
		
	
		private $id_categoria;
		private $descripcion;

		

		public function __construct(){
    		}
  
		public function getId_categoria() {  
     		return $this->id_categoria;  
   		}  
   
		public function setId_categoria($id_categoria) {  
		$this->id_categoria = $id_categoria;  
   		}  
   
		public function getDescripcion() {  
		return $this->descripcion;  
		}  
   
		public function setDescripcion($descripcion) {  
     		$this->descripcion = $descripcion;  
   		}
	}


