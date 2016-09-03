<?php
require_once 'telefonoColector.php';
require_once 'telefono.php';
require_once 'telefonoList.php';

$id = $_GET['id'];

$alm = new telefono();
$model = new telefonoColector();

$model->DeleteTelefono($id);

?>
<a href = "telefonoList.php">consultar</a> 

