<?php

class usuario{

	private $id_usuario;
	private $nombre_usuario;
	private $contraseña;
	private $id_tipo_usuario;
	private $id_rol;

	//Constructor

	function __construct() {  
    
    }

    function __clone() {  
     $this->id_usuario = ++$this->id_usuario;   
    }   


	//Metodos SET & GET

    public function get_Id_usuario(){
    	return $this->id_usuario;
    }

    public function set_Id_usuario($id_usuario){
    	$this->id_usuario = $id_usuario;
    }

    public function get_Nombre_usuario(){
    	return $this->nombre_usuario;
    }

    public function set_Nombre_usuario($nombre_usuario){
    	$this->nombre_usuario = $nombre_usuario;
    }

    public function get_Contraseña(){
    	return $this->contraseña;
    }

    public function set_Contraseña($pass){
    	$this->contraseña = $pass;
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