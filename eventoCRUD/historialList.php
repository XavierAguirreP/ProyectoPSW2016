<?php
require_once 'historialColector.php';
require_once 'conexion.php';
require_once 'historial_order.php';

$alm = new historial_order();
$model = new historialColector();


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Historial List</title>       
	</head>
    <body style="padding:15px;">
		<h2>*** Historial LIST **</h2>
        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <td><a href = "crearHistorial.php">crear</a></td>
                        <tr>
              		    <th style="text-align:left;">Id cliente</th>
                	    <th style="text-align:left;">Linea</th>
                	    <th style="text-align:left;">Id de cabecera order</th>
			 
                	    <th style="text-align:left;">opcion</th>
                            <th style="text-align:left;">opcion</th>


                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarHistorial() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_cliente(); ?></td>
                            <td><?php echo $r->getLinea(); ?></td>  
                            <td><?php echo $r->getId_cabecera_order(); ?></td>
                            
			<td><a href= "frm_actualizarHistorial.php?id_cliente=<?php echo $r->getId_cliente(); ?> ">Editar</a></td>
         		<td><a href="borrarHistorial.php?id_cliente=<?php echo $r->getId_cliente(); ?>">Eliminar</a></td>
										
			                         
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
		<form id="formulario" action="administracion.php" method="get">
			<p><input type="submit" name="enviar" value ="Volver Administracion"></p>
		</form> 
		
    </body>
</html>
