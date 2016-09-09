<?php
	require_once("../clases/estadoColector.php");
	require_once("../clases/estado.php");

	$alm= new estado();
	$model = new estadoColector();

	$id_estado = $_POST['id'];
	$descripcion_estado = $_POST['descripcion'];

	$result = $model->UpdateEstado($id_estado, $descripcion_estado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE</title>
</head>
<body>
	<br>
	<a href="../paginas/Listar_estado.php">Volver</a>
</body>
</html>
