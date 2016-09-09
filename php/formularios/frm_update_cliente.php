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

	<form action="../procesos/proceso_update_cliente.php" method="get">

	<h3> actualizar Registro</h3>  		



 <p>id: <input type="text" name="id" value = <?php echo $id ?>></p>

	

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
