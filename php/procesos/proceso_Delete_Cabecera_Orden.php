<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html");
  exit();
}
require_once '../clases/cabeceraOrdenColector.php';
require_once'../clases/cabeceraOrden.php';

    $coll = new CabeceraOrdenColector();

if(isset($_GET["id"])){

    $obj = $coll->DeleteCabeceraOrden($_GET["id"]);
    header("Location: http:../php/paginas/Listar_cabeceras.php");
    exit();
}else{
  echo "Valor no encontrado.";
  echo "<a href=../paginas/Listar_cabeceras.php>Volver</a>";
}
