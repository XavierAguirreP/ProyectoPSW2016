<?php
session_start();
//if(!isset($_SESSION['username'])){
  //header("Location: http:../php/paginas/login.html");
  //exit();
//}
require_once '../clases/domicilio.php';
require_once '../clases/domicilioColector.php';

    $colector= new DomicilioColector();
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
          <tr>
          <td>Direccion Descriptiva</td>
          <td>Calle principal</td>
          <td>Calle secundaria</td>
          <td>Numeración</td>
          <?php


            foreach ($colector->ListarDomicilios() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getDireccionDescriptiva(); ?> </td>
                       <td> <?php echo $datos->getCallePrincipal(); ?> </td>
                       <td> <?php echo $datos->getCalleSecundaria(); ?> </td>
                       <td> <?php echo $datos->getNumeracion(); ?> </td>

                       <td><a href="../formularios/frm_Update_domicilio.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="../procesos/proceso_Delete_domicilio.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="../formularios/frm_Create_domicilio.php">Crear domicilio</a></td>
          </tr>

</table>

</body>


</html>
