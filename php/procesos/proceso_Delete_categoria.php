<?php
	require_once("../clases/categoria.php");
	require_once("../clases/categoriaColector.php");

	$alm  = new categoria();
	$model = new categoriaColector();
	$id_categoria = $_GET['id'];
	echo $id_categoria;
	$result= $model->DeleteCategoria($id_categoria);
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
	<a href="../paginas/Listar_categoria.php">Volver</a>
</body>
</html>
