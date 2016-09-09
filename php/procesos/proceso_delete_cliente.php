<?php

	require_once("../clases/cliente.php");
	require_once("../clases/clienteColector.php");

	//Inicializacion

	$alm  = new cliente();
	$model = new clienteColector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeleteCliente($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - Cliente</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="../paginas/ListarCliente.php">Volver</a>


</body>
</html>
