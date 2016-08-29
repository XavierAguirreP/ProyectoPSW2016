<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/admin/login/home.html");
  exit();
}
require '../colectores/cabeceraOrdenColector.php';

    $coll = new CabeceraOrdenColector();

if(isset($_GET["id"])){

    $obj = $coll->DeleteCabeceraOrden($_GET["id"]);
    header("Location: http://localhost/prueba/admin/login");
    exit();
}else{
  echo "Valor no encontrado.";
}
