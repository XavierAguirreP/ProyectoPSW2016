<?php
class telefono {  
   private $id;  
   private $numero; 
    	  
  
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

 }
 ?>
