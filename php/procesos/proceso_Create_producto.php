<?php
	require_once("../clases/productoColector.php");
	require_once("../clases/producto.php");

	$alm = new producto();
	$model = new productoColector();

	$descripcion_producto = $_POST['descripcion'];
	$NON = "";
	$path = $_POST['foto'];
	$NON ="../../images/";
	$NON= $NON . $path;
	echo "<br>";
	$precio_producto = $_POST['precio'];
	$sabor_masa = $_POST['sabor_masa'];
	$sabor_relleno = $_POST['sabor_relleno'];
	$porcion = $_POST['porcion'];
	$fk_categoria = $_POST['categoria'];

	if (isset($precio_producto)==null){
		$precio_producto = 25,00;
	}else{
		$precio_producto = $_POST['precio'];
	}

	$model->InsertProducto($descripcion_producto, $NON, $precio_producto, $sabor_masa, $sabor_relleno, $porcion, $fk_categoria);
	echo "Se inserto registro, ejecute la consulta para verificar";
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - PRODUCTO</title>
</head>
<body>
	<a href="../paginas/Listar_producto.php">Volver</a>
</body>
</html>
