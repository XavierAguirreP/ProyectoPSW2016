<?php

	require_once("../clases/estrato_social.php");
	require_once("../clases/estratoColector.php");

	//Inicializacion

	$alm  = new estrato_social();
	$model = new estratoColector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeleteEstrato($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - Estrato Social Cliente</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="../paginas/ListarEstrato.php">Volver</a>


</body>
</html>
