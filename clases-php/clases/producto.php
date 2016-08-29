<?php
  public class Producto{
    private $id;
    private $descripcion;
    private $precio;
    private $estado;

    public function __construct(){


    }
    public function getEstado(){
      return $this->estado;
    }
    public function setEstado($estado){
      $this->estado=$estado;
    }
    public function getPrecio(){
      return $this->precio;
    }
    public function setPrecio($precio){
      $this->precio=$precio;
    }
    public function getId(){
      return $this->id;
    }
    public function getDescripcion(){
      return $this->descripcion;
    }
    public function setId($id){
      $this->id=$id;
    }
    public function setDescripcion(descripcion){
      $this->descripcion=$descripcion;
    }

  }
