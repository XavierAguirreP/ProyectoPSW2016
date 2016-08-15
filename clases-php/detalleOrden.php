<?php
  public class CabeceraOrden{
    private $idCabecera;
    private $idProducto;
    private $cantidad;
    private $total;

    public function __construct(){

    }
    public function getCantidad(){
      return $this->cantidad;
    }
    public function setCantidad($cantidad){
      $this->cantidad=$cantidad;
    }
    public function getTotal(){
      return $this->total;
    }
    public function setTotal($total){
      $this->total=$total;
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
