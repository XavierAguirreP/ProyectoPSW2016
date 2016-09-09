<?php

	require_once("../clases/userCollector.php");
	require_once("../clases/usuario.php");

	$alm = new usuario();
	$model = new userCollector();

	//CATCH POST FOrMULARIO

	$nombre = $_POST['nombre'];
	$pass = $_POST['pass'];


	if (isset($_POST['tipo_user'])==null){
		$id_tipo_user = 2;
	}else{
		$id_tipo_user = $_POST['tipo_user']; 
	}


	if (isset($id_rol = $_POST['rol'])==null){
		$id_rol = 2;
	}else{
		$id_rol = $_POST['rol'];
	}


	

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