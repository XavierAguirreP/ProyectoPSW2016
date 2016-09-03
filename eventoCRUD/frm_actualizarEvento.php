<?php

$id = $_GET['id'];


?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Actualizar Evento</title>
	</head>
	<body>
		<form id="formulario" action="actualizarEvento.php" method="get">
	  		<h3>** Actualizacion de Evento **</h3> 
			<div>    			
				<label>Id: </label>	
				<br>			
				<input type="text" name="id" value = <?php echo $id ?>> 
			</div>			
			<div>
				<label>Tipo evento: </label>
				<br>			
				<input type="text" name="tipo_evento">
			</div>
			<div>
				<label>Nombre tematica: </label>
				<br>			
				<input type="text" name="nombre_tematica">
			</div>
			<div>
				<label>Descripcion: </label>
				<br>			
				<input type="text" name="descripcion">
			</div>
			<div>
				<label>Fecha de evento: </label>
				<br>			
				<input type="text" name="fecha_evento">
			</div>
			<div>
				<label>Precio: </label>
				<br>			
				<input type="text" name="precio">
			</div>
			<div>
				<label>Numero de personas: </label>
				<br>			
				<input type="text" name="num_personas">
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


