<?php
	require_once("../clases/producto.php");
	require_once("../clases/productoColector.php");

	$alm  = new producto();
	$model = new productoColector();
	$id_producto = $_GET['id'];
	echo $id_producto;
	$result= $model->DeleteProducto($id_producto);
?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE PRODUCTO</title>
</head>
<body>
	<?php if($result = true){
		echo "DELETE SUCESSFULL!";
	}else{
		echo "DELETE FAIL";
	}
	?>
	<br>
	<a href="../paginas/Listar_producto.php">Volver</a>
</body>
</html>
