<?php

	require_once("../clases/tipo_userCollector.php");
	require_once("../clases/tipo_usuario.php");

	$alm= new tipo_usuario();
	$model = new tipo_userCollector();

	$id = $_POST['id'];
	$descripcion = $_POST['descripcion'];
	

	$model->UpdateTipoUsuario($id ,$descripcion);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE - Tipo User</title>
</head>
<body>
	<br>
	<a href="../paginas/Listar_tipo_user.php">Volver</a>

</body>
</html>