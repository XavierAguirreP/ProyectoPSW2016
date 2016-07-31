<?php
  class Rol{
    private $nombre;
    private $privilegios;

    public function __construct(){
      $this->nombre="";
      $this->privilegios=[];
    }
    public function __construct($nombre,$privilegios){
      $this->nombre=$nombre;
      $this->privilegios=$privilegios;
    }
    public function setPrivilegios($privilegios){
      $this->privilegios=$privilegios;

    }
    public function setNombre($nombre){
      $this->nombre=$nombre;
    }

    public function getNombre(){
      return $this->nombre;

    }
    public function getPrivilegios(){
      return $this->privilegios          ;

    }

>
