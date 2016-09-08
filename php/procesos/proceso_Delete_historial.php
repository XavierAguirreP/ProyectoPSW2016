<?php
require_once 'historialColector.php';
require_once 'historial_order.php';
require_once 'historialList.php';

$id_cliente = $_GET['id_cliente'];
$alm = new historial_order();
$model = new historialColector();

$model->DeleteHistorial($id_cliente);

?>
<a href = "historialList.php">consultar</a> 

