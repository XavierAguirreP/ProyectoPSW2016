<?php

	require_once "telefonoColector.php";
	require_once "telefono.php";

	//CATCH POST FOrMULARIO

	$numero = $_GET['numero'];	
		
	$alm = new telefono();
	$model = new telefonoColector();


$model->InsertTelefono($numero);

?>
<a href = "telefonoList.php">consultar</a>   


