<?php
  public class DetalleOrden{

    private $idCabecera;
    private $idProducto;
    private $cantidad;
    private $subtotal;
    private $linea,

    public function __construct(){

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
