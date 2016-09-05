<?php

	require_once("../Proyect-Advance/clases/userCollector.php");
	require_once("../Proyect-Advance/clases/usuario.php");

	$alm = new usuario();
	$model = new userCollector();

	//CATCH POST FOrMULARIO

	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];
	$id_tipo_user = $_POST['tipo_user'];
	$id_rol = $_POST['rol'];

	$model->InsertUsuario($nombre, $pass, $id_tipo_user, $id_rol);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - USUARIO</title>
</head>
<body>
	<a href="../Proyect-Advance/Listar_usuario.php">Volver</a>

</body>
</html>