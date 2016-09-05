<?php

	require_once("../Proyect-Advance/clases/userCollector.php");
	require_once("../Proyect-Advance/clases/usuario.php");

	$alm= new usuario();
	$model = new userCollector();

	$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE - USUARIO</title>
</head>
<body style="padding:15px;">

	<form action="procesoUpdate_usuario.php" method="POST">
		<div>
			<br>
			<label>ID:</label>
			<input type="text" name="id" value="<?php echo $id ?>">
		</div>

		<div>
			<br>
			<label>Nombre user:</label>
			<input type="text" name="nombre">
			
		</div>

		<div>
			<br>
			<label>Contraseña:</label>
			<input type="text" name="pass">
		</div>

		<div>
			<br>
			<label>Tipo user:</label>
			<input type="text" name="tipo_user" placeholder="1 -> Admin 2 -> registrado 3 -> invitado">
		</div>

		<div>
			<br>
			<label>Rol:</label>
			<input type="text" name="rol" placeholder="1 -> Admin 2-> registrado 3-> inv">
			
		</div>

		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="Listar_usuario.php">Volver</a>
		</div>
		

	</form>

	






</body>
</html>