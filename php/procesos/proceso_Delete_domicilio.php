<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html");
  exit();
}
require_once '../clases/domicilioColector.php';
require_once '../clases/domicilio.php';
    $coll = new DomicilioColector();

if(isset($_GET["id"])){

    $obj = $coll->DeleteDomicilio($_GET["id"]);
    header("Location: http:../php/paginas/Listar_domicilios.php");
    exit();
}else{
  echo "Valor no encontrado.";
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>PROCESO - ELIMINAR - DOMICILIO</title>
  </head>
  <body>
  	<a href="../paginas/Listar_domicilios.php">Volver</a>

  </body>
  </html>
<?php }
