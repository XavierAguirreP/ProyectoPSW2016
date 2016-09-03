<?php
require_once 'historialColector.php';
require_once 'historial_order.php';


$alm = new historial_order();
$model = new historialColector();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo registro Historial</title>
</head>
<body style="padding:15px;">
	<h2>** Nuevo Historial ** </h2>
	<form id="principal" action="procesoCrearHistorial.php" method="GET">
		<div>
			<br>
			<label>Linea: </label>
			<br>
			<input type="text" name="linea">
		</div>
		<div>
			<label>Id de cabecera order: </label>
			<br>
			<input type="text" name="id_cabecera_order">
		</div>
		<div>
			<br>
			<input type="submit" name="enviar" value="Guardar">
		</div>
	</form>
</body>
</html>    

