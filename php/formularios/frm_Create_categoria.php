<?php
	require_once("../clases/categoriaColector.php");
	require_once("../clases/categoria.php");

	$alm = new categoria();
	$model = new categoriaColector();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CREAR NUEVA CATEGORIA DE PRODUCTO</title>
</head>
<body style="padding:15px;">
	<form id="principal" action="../procesos/proceso_Create_categoria.php" method="POST">
		<div>
			<br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion_cat">
		</div>
		<div>
			<label>Nombre: </label>
			<input type="text" name="nombre_cat">
		</div>
		<div>
			<label>Estado: </label>
			<input type="text" name="estado" placeholder="1->ACTIVO, 2->INACTIVO, 3-> Inv">
		</div>
		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
	</form>
</body>
</html>
