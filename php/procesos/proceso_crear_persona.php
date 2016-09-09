<?php
require_once '../clases/personaColector.php';
require_once '../clases/persona.php';

// Logica


$cedula_identidad = $_GET['cedula_identidad'];
$nombres = $_GET['nombres'];
$apellido_paterno = $_GET['apellido_paterno'];
$apellido_materno = $_GET['apellido_materno'];
$fecha_nacimiento = $_GET['fecha_nacimiento'];
$lugar_nacimiento = $_GET['lugar_nacimiento'];
$sexo = $_GET['sexo'];
$estado_civil = $_GET['estado_civil'];






$alm = new persona();
$model = new personaColector();








echo "<br>";




						 $model->InsertPersona($cedula_identidad ,$nombres ,$apellido_paterno ,$apellido_materno ,$fecha_nacimiento ,$lugar_nacimiento ,$sexo ,$estado_civil);
    




					?>
				<a href = "../paginas/ListarPersona.php">consultar</a>    
