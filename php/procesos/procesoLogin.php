<?php

	require_once("../clases/usuario.php");
	require_once("../clases/userCollector.php");

	//Inicializacion

	$alm  = new usuario();
	$model = new userCollector();

	$result = new usuario();

	//DATOS DE ENTRADA

	$username = $_GET['username'];
	$pass = $_GET['password'];


	if($model->Captura_USR_PASS($username,$pass)){ 
		echo nl2br(" \n ");
		echo nl2br(" \n ");
		$_SESSION['username'] = $username;
		echo "Bienvenid@ ";
		echo $_SESSION['username'];
		echo nl2br(" \n ");

		(header("location: ../paginas/Administrator.php")) ;
		
	
	} else {
		echo nl2br(" \n ");
		echo 'Usuario o Contraseña Incorrecta o su cuenta no ha sido activada.';
		
		?> <!-- CERRADO DE PHP -->
		<!-- CODIGO HTML -->		
		<br>
		<br>
		<a href="../../index.html">Volver</a>

		<?php //Apertura del HTML
	}


	/*
	if($uservalid == $user && $passvalid==$pass){
		echo "Bienvenid@ ";
		echo $user;
		echo nl2br(" \n ");

		require_once '../paginas/Administrator.php';

	}else{
		echo "usuario o contraseña incorrectos";
	}
	*/



?>