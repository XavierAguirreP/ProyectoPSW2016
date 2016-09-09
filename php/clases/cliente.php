<?php

class cliente {

	private $id;
	private $correo_electronico;
	private $id_estrato_social;
	private $id_domicilio;
	
	private $id_telefono;
	private $id_estado;




	//Constructor

	function __construct() {  
    
    }

    function __clone() {  
     $this->id = ++$this->id;   
    }   


	//Metodos SET & GET

    public function get_Id(){
    	return $this->id;
    }

    public function set_Id($id){
    	$this->id = $id;
    }




public function get_Correo_electronico(){
    	return $this->correo_electronico;
    }

    public function set_Correo_electronico($correo_electronico){
    	$this->correo_electronico = $correo_electronico;
    }





    public function get_Id_estrato_social(){
    	return $this->id_estrato_social;
    }

    public function set_Id_estrato_social($id_estrato_social){
    	$this->id_estrato_social = $id_estrato_social;
    }




public function get_Id_domicilio(){
    	return $this->id_domicilio;
    }

    public function set_Id_domicilio($id_domicilio){
    	$this->id_domicilio = $id_domicilio;
    }




public function get_Id_telefono(){
    	return $this->id_telefono;
    }

    public function set_Id_telefono($id_telefono){
    	$this->id_telefono = $id_telefono;
    }




public function get_Id_estado(){
    	return $this->id_estado;
    }

    public function set_Id_estado($id_estado){
    	$this->id_estado = $id_estado;
    }



    




}

?>
