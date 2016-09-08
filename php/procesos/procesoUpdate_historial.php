<?php
require_once 'historialColector.php';
require_once 'historial_order.php';
require_once 'historialList.php';

$alm = new historial_order();
$model = new historialColector();

$id_cliente = $_GET['id_cliente'];
$linea = $_GET['linea'];; 
$id_cabecera_order = $_GET['id_cabecera_order'];  

$model->UpdateHistorial($id_cliente,$linea,$id_cabecera_order);
?>

<a href = "historialList.php">consultar</a>    
