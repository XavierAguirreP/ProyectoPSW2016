<?php
	require_once("../clases/categoriaColector.php");
	require_once("../clases/categoria.php");

	$alm = new categoria();
	$model = new categoriaColector();

	$descripcion_categoria = $_POST['descripcion_cat'];
	$nombre_categoria = $_POST['nombre_cat'];
	$fk_estado = $_POST['estado'];

	$model->InsertCategoria($descripcion_categoria, $nombre_categoria, $fk_estado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESO CREAR NUEVA CATEGORIA DE PRODUCTOS</title>
</head>
<body>
	<a href="../paginas/Listar_categoria.php">Volver</a>
</body>
</html>
