<?php

	require_once("../clases/roles.php");
	require_once("../clases/rolCollector.php");

	//Inicializacion

	$alm  = new roles();
	$model = new rolCollector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeleteRoles($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - ROLES</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="../paginas/Listar_roles.php">Volver</a>


</body>
</html>