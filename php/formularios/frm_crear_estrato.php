<?php

	require_once("../clases/estratoColector.php");
	require_once("../clases/estrato_social.php");

	$alm = new estrato_social();
	$model = new estratoColector();





?>

<!DOCTYPE html>
<html>
<head>
	<title>Crear Estrato Social de Cliente</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="proceso_crear_estrato.php" method="get">
<h3>                     Nuevo Registro</h3>  		

		<div>
			<br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion">
		</div>

		

		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/ListarEstrato.php">Volver</a>
		</div>





		
		


	</form>





</body>
</html>
