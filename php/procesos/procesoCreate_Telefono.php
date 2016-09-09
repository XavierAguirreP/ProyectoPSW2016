<?php

	require_once ("../clases/telefonoColector.php");
	require_once ("../clases/telefono.php");

	//CATCH POST FOrMULARIO

	$numero = $_GET['numero'];
	$id_estado = $_GET['id_estado'];	
		
	$alm = new telefono();
	$model = new telefonoColector();


$model->InsertTelefono($numero, $id_estado);

?>
<a href = "../paginas/Listar_telefono.php">consultar</a>   


