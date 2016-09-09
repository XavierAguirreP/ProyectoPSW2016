<?php

	require_once("../clases/clienteColector.php");
	require_once("../clases/cliente.php");

	$alm = new cliente();
	$model = new clienteColector();





?>

<!DOCTYPE html>
<html>
<head>
	<title>Crear cliente</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="../procesos/proceso_crear_cliente.php" method="get">
<h3>                     Nuevo Registro</h3>  		

		<div>
			<br>
			<label>Correo Electronico: </label>
			<input type="text" name="correo_electronico">
		</div>

		<div>
			<label>Codigo de Estrato Social: </label>
			<input type="text" name="id_estrato_social">
		</div>



		<div>
			<br>
			<label>Codigo de Domicilio: </label>
			<input type="text" name="id_domicilio">
		</div>

		<div>
			<label>Codigo de Telefono: </label>
			<input type="text" name="id_telefono">
		</div>

		<div>
			<label>Codigo de Estado: </label>
			<input type="text" name="id_estado">
		</div>






		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/ListarCliente.php">Volver</a>
		</div>





		
		


	</form>





</body>
</html>
