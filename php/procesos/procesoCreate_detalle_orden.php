<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/detalleOrdenColector.php';
require_once '../clases/detalleOrden.php';


if(isset($_POST["cantidad"]) && isset($_POST["subtotal"]) && isset($_POST["iva"])){
  $vCollector = new DetalleOrdenColector();


  $obj = new DetalleOrden();
  $obj->setCantidad($_POST["cantidad"]);
  $obj->setSubtotal($_POST["subtotal"]);
  $obj->setIva($_POST["iva"]);



          if($vCollector->InsertDetalleOrden(obj)){


            header("Location: http:../php/paginas/Listar_detalles.php"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar detalle de la orden.";
              echo "<a href=../paginas/Listar_detalles.php>Volver</a>";
          }
    } else {
        echo "Error al insetar el detalle de la orden";
        echo "<a href=../paginas/Listar_detalles.php>Volver</a>";
    }
