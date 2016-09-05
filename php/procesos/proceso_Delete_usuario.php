<?php

	require_once("../Proyect-Advance/clases/usuario.php");
	require_once("../Proyect-Advance/clases/userCollector.php");

	//Inicializacion

	$alm  = new usuario();
	$model = new userCollector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeleteUsuario($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - USER</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="Listar_usuario.php">Volver</a>


</body>
</html>