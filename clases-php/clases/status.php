<?php
  class Status{
    private $estado;

    public function __construct($estado){
      $this->estado=$estado;
    }
    public getEstado(){
      return   $this->estado;
    }
    public setEstado($estado){
        $this->estado=$estado;

    }

  }

 
