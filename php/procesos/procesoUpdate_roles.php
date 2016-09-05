<?php

	require_once("../clases/rolCollector.php");
	require_once("../clases/roles.php");

	$alm= new roles();
	$model = new rolCollector();

	$id = $_POST['id'];
	$C = $_POST['C'];
	$R = $_POST['R'];
	$U = $_POST['U'];
	$D = $_POST['D'];

	$model->UpdateRoles($id , $C, $R, $U, $D);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE - ROLES</title>
</head>
<body>
	<br>
	<a href="../paginas/Listar_roles.php">Volver</a>

</body>
</html>