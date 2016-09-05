<?php

class roles{

	private $id;
	private $crear;
	private $consultar;
	private $actualizar;
	private $eliminar;

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

    public function get_Crear(){
    	return $this->crear;
    }

    public function set_Crear($crear){
    	$this->crear = $crear;
    }

    public function get_Consultar(){
    	return $this->consultar;
    }

    public function set_Consultar($consultar){
    	$this->consultar = $consultar;
    }

    public function get_Actualizar(){
    	return $this->actualizar;
    }

    public function set_Actualizar($actualizar){
    	$this->actualizar = $actualizar;
    }

    public function get_Eliminar(){
    	return $this->eliminar;
    }

    public function set_Eliminar($eliminar){
    	$this->eliminar = $eliminar;
    }


}

?>