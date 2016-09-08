<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/domicilioColector.php';
require_once '../clases/domicilio.php';


if(isset($_POST["direccionDescriptiva"]) && isset ($_POST["callePrincipal"]) && isset($_POST["calleSecundaria"]) && isset($_POST["numeracion"])){
  $vCollector = new DomicilioColector();


  $obj = new Domicilio();
  $obj->setDireccionDescriptiva($_POST["direccionDescriptiva"]);
  $obj->setCallePrincipal($_POST["callePrincipal"]);
  $obj->setCalleSecundaria($_POST["calleSecundaria"]);
  $obj->setNumeracion($_POST["numeracion"]);



          if($vCollector->InsertDomicilio(obj)){
            

            header("Location: http://localhost/php/paginas/listar_domicilios.php"); /*no olvidar editar los paths*/
            exit();
          }else{
            ?>
            <!DOCTYPE html>
            <html>
            <head>
              <title>PROCESO - CREAR - DOMICILIO</title>
            </head>
            <body>
              <a href="../paginas/listar_domicilios.php">Volver</a>

            </body>
            </html>
            <?php

    } else {
  ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title>PROCESO - CREAR - DOMICILIO</title>
    </head>
    <body>
      <a href="../paginas/listar_domicilios.php">Volver</a>

    </body>
    </html>
  <?php  }
