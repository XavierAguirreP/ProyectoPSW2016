<?php

	require_once ("../clases/historialColector.php");
	require_once ("../clases/historial_order.php");

	

	//CATCH POST FOrMULARIO

	$linea = $_GET['linea'];	
	$id_cabecera_order = $_GET['id_cabecera_order'];
		
	$alm = new historial_order();
	$model = new historialColector();


$model->InsertHistorial($linea, $id_cabecera_order);

?>
<a href = "../paginas/Listar_historial_order.php">consultar</a>   


