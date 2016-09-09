<?php

	require_once("../clases/rolCollector.php");
	require_once("../clases/roles.php");

	$alm = new roles();
	$model = new rolCollector();

	//CATCH POST FOrMULARIO

	$C = $_POST['C'];
	$R = $_POST['R'];
	$U = $_POST['U'];
	$D = $_POST['D'];


	$model->InsertRoles($C, $R, $U, $D);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - ROLES</title>
</head>
<body>
	<a href="../paginas/Listar_roles.php">Volver</a>

</body>
</html>