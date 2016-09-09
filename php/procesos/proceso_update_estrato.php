<?php

	require_once("../clases/estratoColector.php");
	require_once("../clases/estrato_social.php");

require_once ('../paginas/ListarEstrato.php');



	$alm= new estrato_social();
	$model = new estratoColector();
	
$id = $_GET['id'];
$descripcion = $_GET['descripcion'];



	//$alm= new cliente();
	//$model = new clienteColector();


	$model->UpdateEstrato($id ,$descripcion);

?>

<a href = "../paginas/ListarEstrato.php">consultar</a>    



