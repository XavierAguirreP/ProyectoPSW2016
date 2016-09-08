<?php
require_once ('../clases/eventoColector.php');
require_once ('../clases/evento.php');

$alm = new evento();
$model = new eventoColector();

$id = $_GET['id'];
$tipo_evento = $_GET['tipo_evento'];; 
$nombre_tematica = $_GET['nombre_tematica'];  
$descripcion = $_GET['descripcion'];
$fecha_evento = $_GET['fecha_evento'];  
$precio = $_GET['precio'];
$num_personas = $_GET['num_personas'];  


$model->UpdateEvento($id,$tipo_evento,$nombre_tematica,$descripcion,$fecha_evento,$precio,$num_personas);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROCESS UPDATE EVENTO</title>
</head>
<body>
	<br>
	<a href = "../paginas/Listar_evento.php">consultar</a>  
</body>
</html>


  
