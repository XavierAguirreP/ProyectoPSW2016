<?php
require_once 'eventoColector.php';
require_once 'evento.php';
require_once 'eventoList.php';
$id = $_GET['id'];
$alm = new evento();
$model = new eventoColector();

$model->DeleteEvento($id);

?>
<a href = "eventoList.php">consultar</a> 

