<?php

	require_once("../Proyect-Advance/clases/userCollector.php");
	require_once("../Proyect-Advance/clases/usuario.php");

	$alm= new usuario();
	$model = new userCollector();

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];
	$id_tipo_user = $_POST['tipo_user'];
	$id_rol = $_POST['rol'];

	$model->UpdateUsuario($id ,$nombre, $pass, $id_tipo_user, $id_rol);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE</title>
</head>
<body>
	<br>
	<a href="Listar_usuario.php">Volver</a>

</body>
</html>