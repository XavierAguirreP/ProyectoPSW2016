<?php
require_once '../clases/clienteColector.php';
require_once '../clases/cliente.php';

// Logica


$correo_electronico = $_GET['correo_electronico'];
$id_estrato_social = $_GET['id_estrato_social'];
$id_domicilio=$_GET['id_domicilio'];
$id_telefono=$_GET['id_telefono'];
$id_estado=$_GET['id_estado'];









$alm = new cliente();
$model = new clienteColector();








echo "<br>";




						 $model->InsertCliente($correo_electronico, $id_estrato_social, $id_domicilio, $id_telefono, $id_estado);
    




					?>
				<a href = "../paginas/ListarCliente.php">consultar</a>    
