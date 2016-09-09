<?php
   class estado {
	private $id_estado;  
	private $descripcion_estado;  
  
	function __construct() {  

	}  
   
	function __clone() {  
	   $this->id_estado = ++$this->id_estado;   
	}

	/* ID DE ESTADO */
	public function getId_estado() {  
	   return $this->id;  
	}
	public function setId_estado($id_estado) {  
	   $this->id = $id_estado;  
	}

	/* DESCRIPCION DE ESTADO */
	public function getDescripcion_estado() {  
	   return $this->descripcion;  
	}
	public function setDescripcion_estado($descripcion_estado) {  
	   $this->descripcion = $descripcion_estado;  
	}
   }
?>
