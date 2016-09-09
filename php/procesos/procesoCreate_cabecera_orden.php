<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html"); //editar path
  exit();
}

require_once '../clases/cabeceraOrdenColector.php';
require_once '../clases/CabeceraOrden.php';
if(isset($_POST["idCliente"]) && isset($_POST["fechaEmision"]) && isset($_POST["fechaEntrega"]) && isset($_POST["estado"]) && isset($_POST["iva"])){
  $vCollector = new CabeceraOrdenColector();


  $cabecera = new CabeceraOrden();
  $cabecera->setIdCliente($_POST["idCliente"]);
  $cabecera->setFechaEmision($_POST["fechaEmision"]);
  $cabecera->setFechaEntrega($_POST["fechaEntrega"]);
  $cabecera->setEstado($_POST["estado"]);
  $cabecera->setIva($_POST["iva"]);


          if($vCollector->InsertCabeceraOrden(cabecera)){


            header("Location: http:../php/paginas/Listar_cabeceras.php"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar la cabecera.";
              echo "<a href=../paginas/Listar_cabeceras.php>Volver</a>";
          }

}
else{
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>PROCESO - CREATE - CABECERA DE ORDEN</title>
  </head>
  <body>
  	<a href="../paginas/Listar_cabecera_orden.php">Volver</a>

  </body>
  </html>

<?php}
