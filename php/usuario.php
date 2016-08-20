<?php //TABLA USUARIO DEL PROYECTO
class usuario {
    private $id;
    private $email;
	  private $pass;
    private $id_tipo_user;
    private $id_tipo_estado;

   function __construct() {
   }
   /*
      function __construct() {
    print "En el constructor BaseClass\n";
   } */


   function __clone() {
     $this->id = ++$this->id;
   }
   public function getId() {
     return $this->id;
   }
   public function setId($id) {
     $this->id = $id;
   }
   public function getEmail() {
     return $this->email;
   }
   public function setEmail($email) {
     $this->email = $email;
   }

   public function getPass() {
     return $this->pass;
   }
   public function setPass($pass) {
     $this->pass = $pass;
   }

   public function getId_tipo_user(){
     return $this->id_tipo_user;
   }

   public function setId_tipo_user($id_tipo_user){
     $this->id_tipo_user = $id_tipo_user;
   }

   public function getId_tipo_estado(){
     return $this->id_tipo_estado;
   }

   public function setId_tipo_estado($id_tipo_estado){
     $this->id_tipo_estado = $id_tipo_estado;
   }

 }
 ?>
