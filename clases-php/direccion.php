<?php
  public class Domicilio{
    private $id;
    private $nombreDireccion;
    private $callePrincipal;
    private $calleSecundaria;
    private $numeracion;
    private $nombreSector;
    public function __construct()
    {

    }
    public function getId(){

    }
    public function getNombreDireccion(){
        return $this->id;
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
    public function getNombreSector(){
      return $this->nombreSector;
    }
    public function setId($id){
      $this->id=$id;
    }
    public function setNombreDireccion($nombreDireccion){
      $this->nombreDireccion=$nombreDireccion;
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
    public function setNombreSector($nombreSector){
      $this->nombreSector=$nombreSector;
    }
  }
