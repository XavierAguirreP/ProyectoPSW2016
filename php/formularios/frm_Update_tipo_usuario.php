<?php

	require_once("../clases/tipo_userCollector.php");
	require_once("../clases/tipo_usuario.php");

	$alm= new tipo_usuario();
	$model = new tipo_userCollector();

	$id = $_GET['id'];
	$descripcion = $_GET['descripcion'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE - USUARIO</title>
</head>
<body style="padding:15px;">

	<form action="../procesos/procesoUpdate_tipo_usuario.php" method="POST">
		<div>
			<br>
			<label>ID:</label>
			<input type="text" name="id" value="<?php echo $id ?>">
		</div>

		<div>
			<br>
			<label>Descripción:</label>
			<input type="text" name="descripcion" value= "<?php echo $descripcion ?>" >
			
		</div>

		

		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/Listar_tipo_user.php">Volver</a>
		</div>
		

	</form>

	






</body>
</html>