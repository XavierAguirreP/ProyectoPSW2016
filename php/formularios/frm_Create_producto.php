<?php
   require_once("../clases/producto.php");
   require_once("../clases/productoColector.php");

   $alm = new producto();
   $model = new productoColector();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CREAR NUEVO PRODUCTO</title>
</head>
<body style="padding:15px;">
	<form id="principal" action="../procesos/proceso_Create_producto.php" method="POST">
		<div>
			<br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion">
		</div>
		<div>
			<label>Foto: </label>
			<input type="file" name="foto" id="foto" size="30">
		</div>
		<div>
			<label>Precio: </label>
			<input type="text" name="precio">
		</div>
		<div>
			<label>Sabor de masa: </label>
			<input type="text" name="sabor_masa">	
		</div>
		<div>
			<label>Sabor de relleno: </label>
			<input type="text" name="sabor_relleno">	
		</div>
		<div>
			<label>Porcion: </label>
			<input type="text" name="porcion">	
		</div>
		<div>
			<label>Categoria: </label>
			<input type="text" name="categoria" placeholder="categoria => 1->TORTAS, 2->CUPCAKES, 3->CHOCOLATES, 4-> Inv">	
		</div>
		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
	</form>
</body>
</html>
