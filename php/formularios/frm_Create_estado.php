<?php
	require_once("../clases/estadoColector.php");
	require_once("../clases/estado.php");

	$alm = new estado();
	$model = new estadoColector();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CREAR NUEVO ESTADO</title>
</head>
<body style="padding:15px;">
	<form id="principal" action="../procesos/proceso_Create_estado.php" method="GET">
		<div>
			<br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion">
		</div>
		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
	</form>
</body>
</html>
