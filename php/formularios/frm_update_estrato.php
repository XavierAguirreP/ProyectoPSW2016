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
	<title>UPDATE - Estrato Social Cliente</title>
</head>
<body style="padding:15px;">

	<form action="../procesos/proceso_update_estrato.php" method="get">

	<h3> actualizar Registro</h3>  		



 <p>id: <input type="text" name="id" value = <?php echo $id ?>></p>

	

		<div>
			<br>
			<label>Descripcion: </label>
			<input type="text" name="descripcion">
		</div>

		
		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/ListarEstrato.php">Volver</a>
		</div>





		
		



	</form>

	






</body>
</html>
