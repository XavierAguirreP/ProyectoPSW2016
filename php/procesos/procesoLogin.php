<?php

	$uservalid="reaper";
	$passvalid="123";

	$user = $_GET['usuario'];
	$pass = $_GET['pass'];

	if($uservalid == $user && $passvalid==$pass){
		echo "Bienvenid@ ";
		echo $user;
		echo nl2br(" \n ");

		require_once 'Administrator.php';

	}else{
		echo "usuario o contraseña incorrectos";
	}



?>