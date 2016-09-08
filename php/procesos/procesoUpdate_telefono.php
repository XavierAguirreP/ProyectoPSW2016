<?php
require_once 'telefonoColector.php';
require_once 'telefono.php';
require_once 'telefonoList.php';

$alm = new telefono();
$model = new telefonoColector();

$id = $_GET['id'];
$numero = $_GET['numero'];


$model->UpdateTelefono($id,$numero);
?>

<a href = "telefonoList.php">consultar</a>    
