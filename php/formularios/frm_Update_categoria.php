<?php
	require_once("../clases/categoriaColector.php");
	require_once("../clases/categoria.php");

	$alm= new categoria();
	$model = new categoriaColector();

	$id_categoria = $_GET['id'];
	$descripcion_categoria = $_GET['descripcion'];
	$nombre_categoria = $_GET['nombre'];
	$fk_estado = $_GET['id_estado'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE CATEGORIA</title>
</head>
<body style="padding:15px;">
	<form action="../procesos/proceso_Update_categoria.php" method="POST">
		<div>
			<br>
			<label>ID: </label>
			<input type="text" name="id_cat" value="<?php echo $id_categoria ?>">
		</div>
		<div>
			<label>Descripcion: </label>
			<input type="text" name="descripcion_cat" value="<?php echo $descripcion_categoria ?>">
		</div>
		<div>
			<label>Nombre: </label>
			<input type="text" name="nombre_cat" value="<?php echo $nombre_categoria ?>">
		</div>
		<div>
			<label>Estado: </label>
			<input type="text" name="estado"  value="<?php echo $fk_estado ?>">
		</div>
		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/Listar_categoria.php">Volver</a>
		</div>
	</form>
</body>
</html>
