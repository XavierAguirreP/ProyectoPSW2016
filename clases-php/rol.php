<?php
  class Rol{
    private $persona;
    private $privilegios;

    public function __construct(){
      $this->Perona=new Persona();
      $this->privilegios=[];
    }
    public function __construct($persona,$privilegios){
      $this->persona=$persona;
      $this->privilegios=$privilegios;
    }
    public function setPrivilegios($privilegios){
      $this->privilegios=$privilegios;

    }
    public function setPersona($persona){
      $this->persona=$persona;
    }

    public function getPersona(){
      return $this->persona;

    }
    public function getPrivilegios(){
      return $this->privilegios          ;

    }
