<?php
	require_once("../clases/producto.php");
	require_once("../clases/productoColector.php");

	$alm = new producto();
	$model = new productoColector();

	$id_producto = $_GET['id'];
	$descripcion_producto = $_GET['descripcion'];
	$foto_producto = $_GET['foto'];
	$precio_producto = $_GET['precio'];
	$sabor_masa = $_GET['sabor_masa'];
	$sabor_relleno = $_GET['sabor_relleno'];
	$porcion = $_GET['porcion'];
	$fk_categoria = $_GET['id_categoria'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>CREAR NUEVO PRODUCTO</title>
</head>
<body style="padding:15px;">
	<form id="principal" action="../procesos/proceso_Update_producto.php" method="POST">
		<div>
			<br>
			<label>ID: </label>
			<input type="text" name="id_prod" value="<?php echo $id_producto ?>" >
		</div>
		<div>
			<br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion_prod" value="<?php echo $descripcion_producto ?>" >
		</div>
		<div>
			<label>Foto: </label>
			<input type="file" name="foto_prod" id="foto_prod" size="30" value="<?php echo $foto_producto ?>" >
		</div>
		<div>
			<label>Precio: </label>
			<input type="text" name="precio_prod" value="<?php echo $precio_producto ?>" >
		</div>
		<div>
			<label>Sabor de masa: </label>
			<input type="text" name="sabor_masa_prod" value="<?php echo $sabor_masa ?>" >
		</div>
		<div>
			<label>Sabor de relleno: </label>
			<input type="text" name="sabor_relleno_prod" value="<?php echo $sabor_relleno ?>" >
		</div>
		<div>
			<label>Porcion: </label>
			<input type="text" name="porcion_prod" value="<?php echo $porcion ?>" >
		</div>
		<div>
			<label>Categoria: </label>
			<input type="text" name="categoria_prod" placeholder="categoria => 1->TORTAS, 2->CUPCAKES, 3->CHOCOLATES, 4-> Inv" value="<?php echo $fk_categoria ?>" >	
		</div>
		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
	</form>
</body>
</html>
