<?php


class historial_order {  
    
   private $id_cliente;  
   private $linea; 
   private $id_cabecera_order;  
     
    	  
  
   function __construct() {  
    
   }  
   
   function __clone() {  
     $this->id = ++$this->id;   
   }  
   
   public function getId_cliente() {  
     return $this->id_cliente;  
   }  
   
   public function setId_cliente($id_cliente) {  
     $this->id_cliente = $id_cliente;  
   }  
   
   public function getLinea() {  
     return $this->linea;  
   }  
   public function setLinea($linea) {  
     $this->linea = $linea;  
   }  

   public function getId_cabecera_order() {  
     return $this->id_cabecera_order;  
   }  
   
   public function setId_cabecera_order($id_cabecera_order) {  
     $this->id_cabecera_order = $id_cabecera_order;  
   }  

 }
 ?>
