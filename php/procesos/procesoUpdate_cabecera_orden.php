<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/php/paginas/login.html");
  exit();
}
require_once '../clases/cabeceraOrdenColector.php';
require_once'../clases/cabeceraOrden.php';

if(isset($_POST["id"]) && isset($_POST["idCliente"])&& isset($_POST["fechaEntrega"])&& isset($_POST["fechaEmision"])&& isset($_POST["estado"])&& isset($_POST["iva"])){

 $obj = new CabeceraOrden();
 $obj->setIdCliente($_POST["idCliente"]);
 $obj->setFechaEntrega($_POST["fechaEntrega"]);
 $obj->setFechaEmision($_POST["fechaEmision"]);
 $obj->setEstado($_POST["estado"]);
 $obj->setIva($_POST["iva"]);

         if($coll->UpdateCabeceraOrden($obj)){
           //var_dump($obj);
           header("Location: http://localhost/php/paginas/listar_cabeceras.php");
           exit();
         }else{
             echo "Hubo un error al intentar actualizar la cabecera.";
             ?>
             <!DOCTYPE html>
             <html>
             <head>
             	<title>PROCESS - UPDATE - CABECERA DE ORDEN</title>
             </head>
             <body>
             	<br>
             	<a href="../paginas/listar_cabeceras.php">Volver</a>

             </body>
             </html>
             <?php
         }


}else{
 header("Location: http://localhost/php/paginas/listar_cabeceras.php");
 exit();
}
?>
