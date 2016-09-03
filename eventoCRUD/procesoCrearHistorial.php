<?php

	require_once "historialColector.php";
	require_once "historial_order.php";

	

	//CATCH POST FOrMULARIO

	$linea = $_GET['linea'];	
	$id_cabecera_order = $_GET['id_cabecera_order'];
		
	$alm = new historial_order();
	$model = new historialColector();


$model->InsertHistorial($linea, $id_cabecera_order);

?>
<a href = "historialList.php">consultar</a>   


