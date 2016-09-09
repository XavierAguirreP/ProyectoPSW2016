<?php
  class DetalleOrden{

    private $idCabecera;
    private $idProducto;
    private $cantidad;
    private $subtotal;
    private $linea;

    function __construct(){

    }

    function __clone() {  
     $this->idCabecera = ++$this->idCabecera;   
    }

    public function getLinea(){
      return $this->linea;
    }
    public function setLinea($linea){
      $this->linea=$linea;
    }

    public function getCantidad(){
      return $this->cantidad;
    }
    public function setCantidad($cantidad){
      $this->cantidad=$cantidad;
    }
    public function getSubtotal(){
      return $this->total;
    }
    public function setSubtotal($total){
      $this->subtotal=$total;
    }
    public function getIdProducto(){
      return $this->idProducto;
    }
    public function setIdProducto($idProducto){
      $this->idProducto=$idProducto;
    }
    public function getIdCabecera(){
      return $this->idCabecera;
    }
    public function setIdCabecera($idCabecera){
      $this->idCabecera=$idCabecera;
    }
  }
