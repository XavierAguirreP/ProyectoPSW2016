<?php
class evento {  
   private $id;  
   private $tipo_evento; 
   private $nombre_tematica;  
   private $descripcion;
   private $fecha_evento;  
   private $precio;
   private $num_personas;  
    	  
  
   function __construct() {  
    
   }  
   
   function __clone() {  
     $this->id = ++$this->id;   
   }  
   
   public function getId() {  
     return $this->id;  
   }  
   
   public function setId($id) {  
     $this->id = $id;  
   }  
   
   public function getTipo_evento() {  
     return $this->tipo_evento;  
   }  
   public function setTipo_evento($tipo_evento) {  
     $this->tipo_evento = $tipo_evento;  
   }  

   public function getNombre_tematica() {  
     return $this->nombre_tematica;  
   }  
   
   public function setNombre_tematica($nombre_tematica) {  
     $this->nombre_tematica = $nombre_tematica;  
   }  

   public function getDescripcion() {  
     return $this->descripcion;  
   }  
   
   public function setDescripcion($descripcion) {  
     $this->descripcion = $descripcion;  
   }

   public function getFecha_evento() {  
     return $this->fecha_evento;  
   }  
   
   public function setFecha_evento($fecha_evento) {  
     $this->fecha_evento = $fecha_evento;  
   }

   public function getPrecio() {  
     return $this->precio;  
   }  
   
   public function setPrecio($precio) {  
     $this->precio = $precio;  
   }

   public function getNum_personas() {  
     return $this->num_personas;  
   }  
   
   public function setNum_personas($num_personas) {  
     $this->num_personas = $num_personas;  
   }	


 }
 ?>
