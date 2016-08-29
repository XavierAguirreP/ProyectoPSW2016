<?php
  public class Domicilio{
    private $id;
    private $direccionDescriptiva;
    private $callePrincipal;
    private $calleSecundaria;
    private $numeracion;

    public function __construct()
    {

    }
    public function getId(){
      return $this->id;
    }
    public function setId($id){
      $this->id=$id;
    }
    public function getDireccionDescriptiva(){
        return $this->direccionDescriptiva;
    }
    public function getCallePrincipal(){
      return $this->callePrincipal;
    }
    public function getCalleSecundaria(){
      return $this->calleSecundaria;
    }
    public function getNumeracion(){
      return $this->numeracion;
    }
    

    public function setDireccionDescriptiva($nombreDireccion){
      $this->direccionDescriptiva=$nombreDireccion;
    }
    public function setCallePrincipal($callePrincipal){
      $this->callePrincipal=$callePrincipal;
    }
    public function setCalleSecundaria($calleSecundaria){
      $this->calleSecundaria=$calleSecundaria;
    }
    public function setNumeracion($numeracion){
      $this->numeracion=$numeracion;
    }

  }
