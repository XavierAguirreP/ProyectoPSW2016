<?php
require_once 'eventocolector.php';
require_once 'evento.php';


$tra=new Trabajo();
$tra->Delete($_GET["id"]);
?>
