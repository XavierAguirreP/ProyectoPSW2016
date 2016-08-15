<?php
  class CabeceraOrden{
    private $id;
    private $idCliente;
    private $fechaPedido
    private $fechaEntrega;
    private $estado;

    public function __construct(){


    }

    public function getId(){
      return $this->id;
    }
    public function getIdCliente(){
      return $this->idCliente;
    }
    public function setIdCliente($idc){
      $this->idCliente=$idc;
    }
    public function setId($id){
      $this->codigo=$id;
    }
    public function getFechaEntrega(){
      return $this->fechaEntrega;
    }
    public function setFechaEntrega($fechaEntrega){
      $this->fechaEntrega=$fechaEntrega;
    }
    public function getFechaPedido(){
      return $this->fechaEntrega;
    }
    public function setFechaPedido($fechaPedido){
      $this->fechaEntrega=$fechaPedido;
    }

    public function getEstado(){
      return $this->estado;
    }
    public function setEstado($estado){
      $this->estado=$estado;
    }
  }
