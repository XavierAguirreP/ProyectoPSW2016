<?php
session_start();
if(isset($_SESSION['login'])){
  session_destroy();
  header("Location: http://localhost/php/paginas/login.php");
  exit();
}
?>
