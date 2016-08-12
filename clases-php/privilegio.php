<?php
  /**
   *
   */
  class Privilegio
  {
    private $privilegio;
    private $codigo;

    public function __construct(){
      

    }

    public function getPrivilegio(){
      return $this->privilegio;
    }
    public function getCodigo(){
      return $this->codigo;
    }
    public function setPrivilegio($privilegio){
      $this->privilegio=$privilegio;
    }
    public function setCodigo(){
      $this->codigo=$codigo;
    }
  }
