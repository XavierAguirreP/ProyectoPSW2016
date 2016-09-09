<?php
	require_once("../clases/estado.php");
	require_once("../clases/estadoColector.php");

	$alm  = new estado();
	$model = new estadoColector();
	$id_estado = $_GET['id'];
	echo $id_estado;
	$result= $model->DeleteEstado($id_estado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE ESTADO</title>
</head>
<body>
	<?php if($result = true){
		echo "DELETE SUCESSFULL!";
	}else{
		echo "DELETE FAIL";
	}
	?>
	<br>
	<a href="../paginas/Listar_estado.php">Volver</a>
</body>
</html>
