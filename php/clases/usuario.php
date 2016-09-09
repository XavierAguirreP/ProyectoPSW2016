<?php

class usuario{

	private $id;
	private $nombre_usuario;
	private $pass;
	private $id_tipo_usuario;
	private $id_rol;

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

    public function get_Nombre_usuario(){
    	return $this->nombre_usuario;
    }

    public function set_Nombre_usuario($nombre_usuario){
    	$this->nombre_usuario = $nombre_usuario;
    }

    public function get_Pass(){
    	return $this->pass;
    }

    public function set_Pass($pass){
    	$this->pass = $pass;
    }

    public function get_Id_tipo_usuario(){
    	return $this->id_tipo_usuario;
    }

    public function set_Id_tipo_usuario($id_tipo_usuario){
    	$this->id_tipo_usuario = $id_tipo_usuario;
    }

    public function get_Id_rol(){
    	return $this->id_rol;
    }

    public function set_Id_rol($id_rol){
    	$this->id_rol = $id_rol;
    }


}

?>