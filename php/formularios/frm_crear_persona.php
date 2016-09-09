<?php

	require_once("../clases/personaColector.php");
	require_once("../clases/persona.php");

	$alm = new persona();
	$model = new personaColector();





?>

<!DOCTYPE html>
<html>
<head>
	<title>Crear Persona</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="../procesos/proceso_crear_persona.php" method="get">
<h3>                     Nuevo Registro</h3>  		

<div>
			<br>
			<label>Cedula de Identidad: </label>
			<input type="text" name="cedula_identidad">
		</div>

		<div>
			<label>Nombres: </label>
			<input type="text" name="nombres">
		</div>



		<div>
			<br>
			<label>Apellido Paterno: </label>
			<input type="text" name="apellido_paterno">
		</div>

		<div>
			<label>Apellido Materno: </label>
			<input type="text" name="apellido_materno">
		</div>




		<div>
			<br>
			<label>Fecha de Nacimiento: </label>
			<input type="text" name="fecha_nacimiento">
		</div>

		<div>
			<label>Lugar de Nacimiento: </label>
			<input type="text" name="lugar_nacimiento">
		</div>



		<div>
			<br>
			<label>Sexo: </label>
			<input type="text" name="sexo">
		</div>

		<div>
			<label>Estado Civil: </label>
			<input type="text" name="estado_civil">
		</div>


<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/ListarPersona.php">Volver</a>
		</div>





		
		


	</form>





</body>
</html>
