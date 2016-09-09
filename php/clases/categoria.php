<?php
   class categoria {
	private $id_categoria;
	private $descripcion_categoria;
	private $nombre_categoria;
	private $fk_estado;
  
	function __construct() {  

	}  
   
	function __clone() {  
	   $this->id_categoria = ++$this->id_categoria;   
	}

	/* ID DE CATEGORIA */
	public function getId_categoria() {  
	   return $this->id;  
	}
	public function setId_categoria($id_categoria) {
	   $this->id = $id_categoria;  
	}

	/* DESCRIPCION DE CATEGORIA */
	public function getDescripcion_categoria() {  
	   return $this->descripcion;  
	}
	public function setDescripcion_categoria($descripcion_categoria) {  
	   $this->descripcion = $descripcion_categoria;
	}

	/* NOMBRE DE CATEGORIA */
	public function getNombre_categoria() {  
	   return $this->nombre;  
	}
	public function setNombre_categoria($nombre_categoria) {  
	   $this->nombre = $nombre_categoria;
	}

	/* ESTADO (FK) DE CATEGORIA */
	public function getFK_estado() {  
	   return $this->id_estado;  
	}
	public function setFK_estado($fk_estado) {  
	   $this->id_estado = $fk_estado;  
	}
   }
?>
