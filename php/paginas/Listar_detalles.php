<?php
session_start();
//if(!isset($_SESSION['username'])){
  //header("Location: http:../php/paginas/login.html");
  //exit();
//}

require_once("../clases/conexion.php");
require_once '../clases/detalleOrden.php';
require_once '../clases/detalleOrdenColector.php';

    $colector= new DetalleOrdenColector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
       <?php
       //echo "Hola ".$_SESSION['username'];
       //echo"<a href=Administrator.php> Volver</a>";
        ?>
        <table class="datos">
          <?php

            foreach ($colector->ListarDetalles() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getIdCabecera(); ?> </td>
                       <td> <?php echo $datos->getIdProducto(); ?> </td>
                       <td> <?php echo $datos->getCantidad(); ?> </td>
                       <td> <?php echo $datos->getSubtotal(); ?> </td>
                       <td> <?php echo $datos->getLinea(); ?> </td>

                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="../formularios/frm_Create_detalleOrden.php">Crear detalle de orden</a></td>
          </tr>

</table>

</body>


</html>
