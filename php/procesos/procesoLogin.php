<?php

	$uservalid="reaper";
	$passvalid="123";

	$user = $_GET['username'];
	$pass = $_GET['password'];

	if($uservalid == $user && $passvalid==$pass){
		echo "Bienvenid@ ";
		echo $user;
		echo nl2br(" \n ");

		require_once '../paginas/Administrator.php';

	}else{
		echo "usuario o contraseña incorrectos";
	}



?>