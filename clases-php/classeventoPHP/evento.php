
<?php
	require_once "conexion.php";
	

	public class evento {
		
	
		private $id_evento;
		private $nombre;
		private $descripcion;

		

		public function __construct(){
    		}
  
		public function getId_evento() {  
     		return $this->id_evento;  
   		}  
   
		public function setId_evento($id_evento) {  
		$this->id_Evento = $id_evento;  
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


