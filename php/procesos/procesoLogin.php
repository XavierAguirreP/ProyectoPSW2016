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
	$tipo_user= "";

	
	


	//PROCESO LOGIN

	if($model->Captura_USR_PASS($username,$pass)){ 
		echo nl2br(" \n ");
		echo nl2br(" \n ");
		$_SESSION["username"] = $username;
		echo "Bienvenid@ ";
		echo $username;
		echo nl2br(" \n ");
		echo nl2br(" \n ");

		//$result->set_Id_tipo_usuario($model->Captura_TIP_USER($username));
		
		//$tipo_user = $result->get_Id_tipo_usuario();

		$tipo_user = $model->Captura_TIP_USER($username);

		

		echo $tipo_user;

		

		
		//echo $tipo_user;
		if($tipo_user == 1){
			echo "Administrador";
			require_once '../paginas/Administrator.php';
				
		}else if($tipo_user == 2){
			echo "Usuario";
			//require_once '../../index.html';
			header("Location: ../../index.php");	
		}else{
			echo "Invitado";
		}
		

		
		
	
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