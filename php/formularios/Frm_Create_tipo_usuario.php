<?php

	require_once("../clases/tipo_userCollector.php");
	require_once("../clases/tipo_usuario.php");

	$alm = new tipo_usuario();
	$model = new tipo_userCollector();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Tipo User</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="../procesos/procesoCreate_Tipo_Usuario.php" method="POST">
		
		<div>
			<label>Descripcion: </label>
			<input type="text" name="Descripcion">
		</div>
		
		

		<div>
			<input type="submit" name="enviar" value="enviar">
			<br>
			<br>
			<a href="../paginas/Listar_tipo_user.php">Volver</a>
		</div>
		


	</form>





</body>
</html>