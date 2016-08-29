<?php
  class CabeceraOrden{
    private $id;
    private $idCliente;
    private $fechaEmision;
    private $fechaEntrega;
    private $estado;
    private $iva;

    public function __construct(){


    }
    public function getIva(){
      return $this->iva;
    }
    public function setIva($idc){
      $this->iva=$idc;
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
      $this->id=$id;
    }
    public function getFechaEntrega(){
      return $this->fechaEntrega;
    }
    public function setFechaEntrega($fechaEntrega){
      $this->fechaEntrega=$fechaEntrega;
    }
    public function getFechaEmision(){
      return $this->fechaEmision;
    }
    public function setFechaEmision($fecha){
      $this->fechaEmision=$fecha;
    }

    public function getEstado(){
      return $this->estado;
    }
    public function setEstado($estado){
      $this->estado=$estado;
    }
  }
