<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'detalleOrden.php';
require 'detalleOrdenColector.php';

    $colector= new DetalleOrdenColector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
       <?php
       echo "Hola ".$_SESSION['login'];
       echo"<a href=../login/logout.php> Salir</a>";
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
            <td colspan=4><a href="../crear/crearDetalleOrden.php">Crear detalle de orden</a></td>
          </tr>

</table>

</body>


</html>
