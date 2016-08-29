<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/");
  exit();
}
require 'domicilio.php';
require 'domicilioColector.php';

    $colector= new DomicilioColector();
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

            foreach ($colector->ListarDomicilios() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getDireccionDescriptiva(); ?> </td>
                       <td> <?php echo $datos->getCallePrincipal(); ?> </td>
                       <td> <?php echo $datos->getCalleSecundaria(); ?> </td>
                       <td> <?php echo $datos->getNumeracion; ?> </td>

                       <td><a href="../editar/editarDomicilio.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="../eliminar/eliminarDomicilio.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="../crear/crearDomicilio.php">Crear domicilio</a></td>
          </tr>

</table>

</body>


</html>
