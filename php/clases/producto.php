<?php
   class producto {
	private $id_producto;  
	private $descripcion_producto;
	private $foto_producto;
	private $precio_producto;
	private $sabor_masa;
	private $sabor_relleno;
	private $porcion;
	private $fk_categoria;
  
	function __construct() {  

	}  
   
	function __clone() {  
	   $this->id_producto = ++$this->id_producto;   
	}

	/* ID DE PRODUCTO */
	public function getId_producto() {  
	   return $this->id;  
	}
	public function setId_producto($id_producto) {  
	   $this->id = $id_producto;  
	}

	/* DESCRIPCION DE PRODUCTO */
	public function getDescripcion_producto() {  
	   return $this->descripcion;  
	}
	public function setDescripcion_producto($descripcion_producto) {  
	   $this->descripcion = $descripcion_producto;  
	}

	/* FOTO DE PRODUCTO */
	public function getFoto_producto() {  
	   return $this->foto;  
	}
	public function setFoto_producto($foto_producto) {  
	   $this->foto = $foto_producto;  
	}

	/* PRECIO DE PRODUCTO */
	public function getPrecio_producto() {  
	   return $this->precio;
	}
	public function setPrecio_producto($precio_producto) {  
	   $this->precio = $precio_producto;  
	}

	/* SABOR MASA DE PRODUCTO */
	public function getSabor_masa() {  
	   return $this->sabor_masa;  
	}
	public function setSabor_masa($sabor_masa) {  
	   $this->sabor_masa = $sabor_masa;  
	}

	/* SABOR RELLENO DE PRODUCTO */
	public function getSabor_relleno() {  
	   return $this->sabor_relleno;  
	}
	public function setSabor_relleno($sabor_relleno) {  
	   $this->sabor_relleno = $sabor_relleno;  
	}

	/* PORCION DE PRODUCTO */
	public function getPorcion() {
	   return $this->porcion;
	}
	public function setPorcion($porcion) {
	   $this->porcion = $porcion;  
	}

	/* CATEGORIA (FK) DE PRODUCTO */
	public function getFK_categoria() {  
	   return $this->id_categoria;  
	}
	public function setFK_categoria($fk_categoria) {  
	   $this->id_categoria = $fk_categoria;  
	}
   }
?>
