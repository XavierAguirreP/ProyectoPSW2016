<?php
	require_once("../clases/estadoColector.php");
	require_once("../clases/estado.php");

	$alm= new estado();
	$model = new estadoColector();

	$id_estado = $_GET['id'];
	$descripcion_estado = $_GET['descripcion'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE ESTADO</title>
</head>
<body style="padding:15px;">

	<form action="../procesos/proceso_Update_estado.php" method="POST">
		<div>
			<br>
			<label>ID:</label>
			<input type="text" name="id" value="<?php echo $id_estado ?>">
		</div>
		<div>
			<br>
			<label>Descripcion:</label>
			<input type="text" name="descripcion" value="<?php echo $descripcion_estado ?>">
		</div>
		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="../paginas/Listar_estado.php">Volver</a>
		</div>
	</form>
</body>
</html>
