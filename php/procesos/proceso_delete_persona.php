<?php

	require_once("../clases/persona.php");
	require_once("../clases/personaColector.php");

	//Inicializacion

	$alm  = new persona();
	$model = new personaColector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeletePersona($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - Persona</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="../paginas/ListarPersona.php">Volver</a>


</body>
</html>
