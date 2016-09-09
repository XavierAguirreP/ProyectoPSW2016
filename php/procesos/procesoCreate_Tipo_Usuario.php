<?php

	require_once("../clases/tipo_userCollector.php");
	require_once("../clases/tipo_usuario.php");

	$alm = new tipo_usuario();
	$model = new tipo_userCollector();

	//CATCH POST FOrMULARIO

	$Descripcion = $_POST['Descripcion'];
	

	$model->InsertTipoUsuario($Descripcion);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - TIPO USUARIO</title>
</head>
<body>
	<a href="../paginas/Listar_tipo_user.php">Volver</a>

</body>
</html>