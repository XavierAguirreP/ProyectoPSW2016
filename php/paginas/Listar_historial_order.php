<?php
require_once("../clases/conexion.php");
require_once("../clases/historial_order.php");
require_once("../clases/historialColector.php");

$alm = new historial_order();
$model = new historialColector();

$id= 0;
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
			    <br>	
                            <a href = "../formularios/Frm_Create_historial_order.php">crear</a>   
			    <br>	
			    <br>	
	
                <table class="pure-table pure-table-horizontal" border="1">
                    <thead>
                        
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
                            
			<td><a href= "../formularios/frm_Update_historial.php?id_cliente=<?php echo $r->getId_cliente(); ?> ">Editar</a></td>
         		<td><a href="../procesos/proceso_Delete_historial.php?id_cliente=<?php echo $r->getId_cliente(); ?>">Eliminar</a></td>
										
			                         
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
		<form id="formulario" action="Administrator.php" method="get">
			<p><input type="submit" name="enviar" value ="Volver Administracion"></p>
		</form> 
		
    </body>
</html>
