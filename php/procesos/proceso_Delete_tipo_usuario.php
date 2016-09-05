<?php

	require_once("../clases/tipo_usuario.php");
	require_once("../clases/tipo_userCollector.php");

	//Inicializacion

	$alm  = new tipo_usuario();
	$model = new tipo_userCollector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeleteTipoUsuario($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - TIPO USER</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="../paginas/Listar_tipo_user.php">Volver</a>


</body>
</html>