<?php
session_start();
if(isset($_SESSION['login'])){
  echo "Hola ".$_SESSION['login'];
  echo"<a href=/prueba/admin/login/logout.php> Salir</a>";
?>
<br>
<a href="../clases-php/mostrar/indexDomicilios.php">Administrar Domicilios</a>
<br>
<a href="../clases-php/mostrar/indexDetalles.php">Administrar Detalles de órdenes</a>
<br>
<a href="../clases-php/mostrar/indexCabeceras.php">Administrar cabeceras de órdenes</a>
  <?php
}else{
  header("Location: http://localhost/prueba/admin/login/home.html");
  exit();
}
