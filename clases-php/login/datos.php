<?php
session_start();
$nombre=$_POST['user'];

$clave=$_POST['pass'];

if($nombre=="yo" && $clave=="yo"){


	$_SESSION['login'] = $nombre;

}
header("Location: http://localhost/prueba/admin/");
  exit();
?>
