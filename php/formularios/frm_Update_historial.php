<?php

$id_cliente = $_GET['id_cliente'];


?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Actualizar CLiente</title>
	</head>
	<body>
		<form id="formulario" action="actualizarHistorial.php" method="get">
	  		<h3>** Actualizacion de Historial **</h3> 
			<div>    			
				<label>Id cliente: </label>	
				<br>			
				<input type="text" name="id_cliente" value = <?php echo $id_cliente ?>> 
			</div>			
			<div>
				<label>Linea: </label>
				<br>			
				<input type="text" name="linea">
			</div>
			<div>
				<label>Id cabecera order: </label>
				<br>			
				<input type="text" name="id_cabecera_order">
			</div>
			<div>
				<br>
				<input type="submit" name="enviar" value="Guardar">
			</div>
				<br>
				<a href="historialList.php">Volver</a>
			
		</form>
	</body>
</html>


