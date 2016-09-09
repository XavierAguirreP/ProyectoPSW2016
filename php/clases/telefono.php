<?php
class telefono {  
   private $id;  
   private $numero; 
   private $id_estado;	
    	  
  
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
   
   public function getNumero() {  
     return $this->numero;  
   }  
   public function setNumero($numero) {  
     $this->numero = $numero;  
   }  
   
   public function getId_estado() {  
     return $this->id_estado;  
   }  
   public function setId_estado($id_estado) {  
     $this->id_estado = $id_estado;  
   }	
	

 }
 ?>
