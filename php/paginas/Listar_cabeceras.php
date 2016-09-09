<?php
session_start();

//if(!isset($_SESSION['username'])){
  //header("Location: ../../login.html");
  //exit();
//}
require_once '../clases/cabeceraOrden.php';
require_once '../clases/cabeceraOrdenColector.php';
    
    $alm = new CabeceraOrden();
    $colector= new CabeceraOrdenColector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
       <?php
       //echo "Hola ".$_SESSION['username'];
       echo"<a href=../paginas/Administrator.php> Salir</a>";
        ?>
        <table class="datos">
          <tr>
           <td> IdCliente </td>
            <td> FechaEmision </td>
            <td>FechaEntrega</td>
            <td> Estado </td>
            <td> Iva</td>
          </tr>
          <?php

            foreach ($colector->ListarCabeceras() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getIdCliente(); ?> </td>
                       <td> <?php echo $datos->getFechaEmision(); ?> </td>
                       <td> <?php echo $datos->getFechaEntrega(); ?> </td>
                       <td> <?php echo $datos->getEstado(); ?> </td>
                       <td> <?php echo $datos->getIva(); ?> </td>
                       <td><a href="../formularios/frm_Update_cabecera_orden.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="../procesos/proceso_Delete_Cabecera_Orden.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="../formularios/frm_Create_cabecera_orden.php">Crear cabecera de orden</a></td>
          </tr>

</table>

</body>


</html>
