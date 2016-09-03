<?php
require_once 'telefonoColector.php';
require_once 'conexion.php';
require_once 'telefono.php';

$alm = new telefono();
$model = new telefonoColector();


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Telefono List</title>       
	</head>
    <body style="padding:15px;">
		<h2>*** Telefono LIST **</h2>
        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <td><a href = "crearTelefono.php">crear</a></td>
                        <tr>
		            <th style="text-align:left;">Id</th>
                	    <th style="text-align:left;">Numero</th>
                
                	    <th style="text-align:left;">opcion</th>
                            <th style="text-align:left;">opcion</th>

                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarTelefono() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId(); ?></td>
                            <td><?php echo $r->getNumero(); ?></td>  
                            
			<td><a href= "frm_actualizarTelefono.php?id=<?php echo $r->getId(); ?>">Editar</a></td>
         		<td><a href="borrarTelefono.php?id=<?php echo $r->getId(); ?>">Eliminar</a></td>
										
			                         
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
