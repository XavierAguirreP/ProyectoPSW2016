<?php
class demo {  
   private $id_demo;  
   private $nombre;  
  
   function __construct() {  
    

   }  
   /*
      function __construct() {  
    print "En el constructor BaseClass\n";
   } */ 
   
   
   function __clone() {  
     $this->id_demo = ++$this->id_demo;   
   }  
   public function getid_demo() {  
     return $this->id_demo;  
   }  
   public function setid_demo($id_demo) {  
     $this->id_demo = $id_demo;  
   }  
   public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  

 }
 ?>
