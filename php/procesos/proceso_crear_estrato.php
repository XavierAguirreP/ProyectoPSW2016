<?php
require_once '../clases/estratoColector.php';
require_once '../clases/estrato_social.php';

// Logica


$descripcion = $_GET['descripcion'];



$alm = new estrato_social();
$model = new estratoColector();








echo "<br>";




						 $model->InsertEstrato($descripcion);
    




					?>
				<a href = "../paginas/ListarEstrato.php">consultar</a>    
