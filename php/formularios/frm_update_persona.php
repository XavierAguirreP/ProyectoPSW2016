<?php

	//require_once("personaColector.php");
	//require_once("persona.php");
//require_once("ListarPersona.php");

$id = $_GET['id'];
echo $id;

	//$alm= new persona();
	//$model = new personaColector();

	

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE - persona</title>
</head>
<body style="padding:15px;">

	<form action="../procesos/proceso_update_persona.php" method="get">



 <p>id: <input type="text" name="id" value = <?php echo $id ?>></p>

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
