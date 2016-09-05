<?php

	require_once("../Proyect-Advance/clases/userCollector.php");
	require_once("../Proyect-Advance/clases/usuario.php");

	$alm = new usuario();
	$model = new userCollector();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="procesoCreate_Usuario.php" method="POST">
		<div>
			<br>
			<label>Nombre: </label>
			<input type="text" name="nombre">
		</div>

		<div>
			<label>Contraseña: </label>
			<input type="text" name="pass">
		</div>
		
		<div>
			<label>Tipo de usuario: </label>
			<input type="text" name="tipo_user" placeholder="1->ADMIN, 2->REGISTRADO, 3-> Inv">
		</div>

		<div>
			<label>Rol: </label>
			<input type="text" name="rol" placeholder="Permisos => 1->ADMIN, 2->REGISTRADO, 3-> Inv">	
		</div>

		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
		


	</form>





</body>
</html>