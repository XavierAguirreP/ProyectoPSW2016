
<?php
	require_once("tallerPHp/conexion.php")
	

	public class evento {
		
	
		private $codigo;
		private $nombre;
		private $descripcion;

		

		public function __construct(){
    		}
  
		public function getCodigo() {  
     		return $this->codigo;  
   		}  
   
		public function setCodigo($codigo) {  
		$this->codigo = $codigo;  
   		}  
   
		public function getNombre() {  
		return $this->nombre;  
		}  
   
		public function setNombre($nombre) {  
     		$this->nombre = $nombre;  
   		}

		public function getDescripcion() {  
		return $this->descripcion;  
		}  
   
		public function setDescripcion($descripcion) {  
     		$this->descripcion = $descripcion;  
   		}
	}


