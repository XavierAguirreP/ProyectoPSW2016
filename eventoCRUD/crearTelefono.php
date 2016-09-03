<?php
require_once 'telefonoColector.php';
require_once 'telefono.php';


$alm = new telefono();
$model = new telefonoColector();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo registro Telefono</title>
</head>
<body style="padding:15px;">
	<h2>** Nuevo Telefono ** </h2>
	<form id="principal" action="procesoCrearTelefono.php" method="GET">
		<div>
			<br>
			<label>Numero: </label>
			<br>
			<input type="text" name="numero">
		</div>
		<div>
			<br>
			<input type="submit" name="enviar" value="Guardar">
		</div>
	</form>
</body>
</html>    

