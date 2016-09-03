<?php

	require_once "eventoColector.php";
	require_once "evento.php";

	

	//CATCH POST FOrMULARIO

	$tipo_evento = $_GET['tipo_evento'];	
	$nombre_tematica = $_GET['nombre_tematica'];
	$descripcion = $_GET['descripcion'];	
	$fecha_evento = $_GET['fecha_evento'];
	$precio = $_GET['precio'];	
	$num_personas = $_GET['num_personas'];

	
	$alm = new evento();
	$model = new eventoColector();


$model->InsertEvento($tipo_evento, $nombre_tematica, $descripcion, $fecha_evento, $precio, $num_personas);

?>
<a href = "eventoList.php">consultar</a>   


