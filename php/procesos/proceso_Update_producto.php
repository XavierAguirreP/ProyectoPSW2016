<?php
	require_once("../clases/productoColector.php");
	require_once("../clases/producto.php");

	$alm= new producto();
	$model = new productoColector();

	$id_producto = $_POST['id_prod'];
	$descripcion_producto = $_POST['descripcion_prod'];
	$NON = '';
	$path = $_POST['foto_prod'];
	$NON ="../../images/";
	$NON= $NON . $path;
	echo "<br>";
	$precio_producto = $_POST['precio_prod'];
	$sabor_masa = $_POST['sabor_masa_prod'];
	$sabor_relleno = $_POST['sabor_relleno_prod'];
	$porcion = $_POST['porcion_prod'];
	$fk_categoria = $_POST['categoria_prod'];

	$result = $model->UpdateProducto($id_producto, $descripcion_producto, $NON, $precio_producto, $sabor_masa, $sabor_relleno, $porcion, $fk_categoria);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE</title>
</head>
<body>
	<br>
	<a href="../paginas/Listar_producto.php">Volver</a>
</body>
</html>
