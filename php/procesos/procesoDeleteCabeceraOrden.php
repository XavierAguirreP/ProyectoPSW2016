<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http://localhost/php/paginas/login.html");
  exit();
}
require_once '../clases/cabeceraOrdenColector.php';
require_once'../clases/cabeceraOrden.php';

    $coll = new CabeceraOrdenColector();

if(isset($_GET["id"])){

    $obj = $coll->DeleteCabeceraOrden($_GET["id"]);
    header("Location: http://localhost/php/paginas/listar_cabeceras.php");
    exit();
}else{
  echo "Valor no encontrado.";
  echo "<a href=../paginas/listar_cabeceras.php>Volver</a>";
}
