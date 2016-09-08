<?php

	require_once("../clases/rolCollector.php");
	require_once("../clases/roles.php");

	$alm= new roles();
	$model = new rolCollector();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Create - Roles</title>
</head>
<body style="padding:15px;">

	<form action="../procesos/procesoCreate_roles.php" method="POST">
		

		<div>
			<br>
			<label>Crear:</label>

			<select name="C">
				<option value="TRUE">TRUE</option>
				<option value="FALSE">FALSE</option>
			</select>
			
		</div>

		<div>
			<br>
			<label>Consultar:</label>
			<select name="R">
				<option value="TRUE">TRUE</option>
				<option value="FALSE">FALSE</option>
			</select>

		</div>

		<div>
			<br>
			<label>Actualizar:</label>
			<select name="U">
				<option value="TRUE">TRUE</option>
				<option value="FALSE">FALSE</option>
			</select>

		</div>

		<div>
			<br>
			<label>Eliminar:</label>
			<select name="D">
				<option value="TRUE">TRUE</option>
				<option value="FALSE">FALSE</option>
			</select>
			
		</div>

		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/Listar_roles.php">Volver</a>
		</div>
		

	</form>

	






</body>
</html>