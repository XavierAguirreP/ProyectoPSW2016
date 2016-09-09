<?php
	require_once("../clases/estadoColector.php");
	require_once("../clases/estado.php");

	$alm = new estado();
	$model = new estadoColector();

	$descripcion_estado = $_GET['descripcion'];

	$result = $model->InsertEstado($descripcion_estado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESO CREAR NUEVO ESTADO</title>
</head>
<body>
	<a href="../paginas/Listar_estado.php">Volver</a>
</body>
</html>
