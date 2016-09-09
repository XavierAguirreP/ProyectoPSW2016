<?php
	require_once("../clases/categoriaColector.php");
	require_once("../clases/categoria.php");

	$alm= new categoria();
	$model = new categoriaColector();

	$id_categoria = $_POST['id_cat'];
	$descripcion_categoria = $_POST['descripcion_cat'];
	$nombre_categoria = $_POST['nombre_cat'];
	$fk_estado = $_POST['estado'];

	$result = $model->UpdateCategoria($id_categoria, $descripcion_categoria, $nombre_categoria, $fk_estado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE</title>
</head>
<body>
	<br>
	<a href="../paginas/Listar_categoria.php">Volver</a>
</body>
</html>
