<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http://localhost/php/paginas/login.html");
  exit();
}
require_once '../clases/domicilioColector.php';
require_once '../clases/domicilio.php';
    $coll = new DomicilioColector();

if(isset($_GET["id"])){

    $obj = $coll->DeleteDomicilio($_GET["id"]);
    header("Location: http://localhost/php/paginas/listar_domicilios.php");
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
  	<a href="../paginas/listar_domicilios.php">Volver</a>

  </body>
  </html>
<?php }
