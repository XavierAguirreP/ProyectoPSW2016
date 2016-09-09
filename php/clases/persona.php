<?php

class persona{

	private $id;
	private $cedula_identidad;
	private $nombres;
	private $apellido_paterno;
	private $apellido_materno;
	private $fecha_nacimiento;
	private $lugar_nacimiento;
	private $sexo;
	private $estado_civil;

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

public function get_Cedula_identidad(){
    	return $this->cedula_identidad;
    }

    public function set_Cedula_identidad($cedula_identidad){
    	$this->cedula_identidad = $cedula_identidad;
    }




    public function get_Nombres(){
    	return $this->nombres;
    }

    public function set_Nombres($nombres){
    	$this->nombres = $nombres;
    }



    public function get_Apellido_paterno(){
    	return $this->apellido_paterno;
    }

    public function set_Apellido_paterno($apellido_paterno){
    	$this->apellido_paterno = $apellido_paterno;
    }




    public function get_Apellido_materno(){
    	return $this->apellido_materno;
    }

    public function set_Apellido_materno($apellido_materno){
    	$this->apellido_materno = $apellido_materno;
    }

    public function get_Fecha_nacimiento(){
    	return $this->fecha_nacimiento;
    }

    public function set_Fecha_nacimiento($fecha_nacimiento){
    	$this->fecha_nacimiento = $fecha_nacimiento;
    }

	public function get_Lugar_nacimiento(){
    	return $this->lugar_nacimiento;
    }

    public function set_Lugar_nacimiento($lugar_nacimiento){
    	$this->lugar_nacimiento = $lugar_nacimiento;
    }

    public function get_Sexo(){
    	return $this->sexo;
    }

    public function set_Sexo($sexo){
    	$this->sexo = $sexo;
    }

public function get_Estado_civil(){
    	return $this->estado_civil;
    }

    public function set_Estado_civil($estado_civil){
    	$this->estado_civil = $estado_civil;
    }




}

?>
