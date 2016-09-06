<?php

	require_once("../clases/userCollector.php");
	require_once("../clases/usuario.php");

	$alm = new usuario();
	$model = new userCollector();

	//CATCH POST FOrMULARIO

	$nombre = $_POST['nombre'];

	echo $nombre;
	$pass = $_POST['pass'];
	echo $pass;
	//$id_tipo_user = $_POST['tipo_user'];
	//$id_rol = $_POST['rol'];

	$id_tipo_user = isset($_POST['tipo_user']) ? $_POST['tipo_user'] : 2;

	$id_rol = isset($_POST['rol']) ? $_POST['rol'] : 2;


	$model->InsertUsuario($nombre, $pass, $id_tipo_user, $id_rol);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - USUARIO</title>
</head>
<body>
	<a href="../paginas/Listar_usuario.php">Volver</a>

</body>
</html>