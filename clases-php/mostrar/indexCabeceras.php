<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'cabeceraOrden.php';
require 'cabeceraOrdenColector.php';

    $colector= new CabeceraOrdenColector();
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

            foreach ($colector->ListarCabeceras() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getIdCliente(); ?> </td>
                       <td> <?php echo $datos->getFechaEmision(); ?> </td>
                       <td> <?php echo $datos->getFechaEntrega(); ?> </td>
                       <td> <?php echo $datos->getEstado(); ?> </td>
                       <td> <?php echo $datos->getIva()(); ?> </td>
                       <td><a href="../editar/editarCabeceraOrden.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="../eliminar/eliminarCabeceraOrden.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="../crear/crearCabeceraOrden.php">Crear cabecera de orden</a></td>
          </tr>

</table>

</body>


</html>
