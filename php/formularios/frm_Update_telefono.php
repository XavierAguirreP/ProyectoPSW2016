<?php

$id = $_GET['id'];


?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Actualizar Telefono</title>
	</head>
	<body>
		<form id="formulario" action="actualizarTelefono.php" method="get">
	  		<h3>** Actualizacion de Telefono **</h3> 
			<div>    			
				<label>Id: </label>	
				<br>			
				<input type="text" name="id" value = <?php echo $id ?>> 
			</div>			
			<div>
				<label>Numero: </label>
				<br>			
				<input type="text" name="tipo_evento">
			</div>
			<div>
				<br>
				<input type="submit" name="enviar" value="Guardar">
			</div>
				<br>
				<a href="eventoList.php">Volver</a>
			
		</form>
	</body>
</html>


