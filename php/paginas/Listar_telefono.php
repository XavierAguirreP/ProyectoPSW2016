<?php
require_once ('../clases/telefonoColector.php');
require_once ('../clases/conexion.php');
require_once ('../clases/telefono.php');

$alm = new telefono();
$model = new telefonoColector();

$id= 0;
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
			<br>                        
			<a href = "../formularios/Frm_Create_telefono.php">crear</a>       
			<br>
			<br>	
                <table class="pure-table pure-table-horizontal" border = "1" >
                    <thead>
                       <tr>
		            <th style="text-align:left;">Id</th>
                	    <th style="text-align:left;">Numero</th>
			    <th style="text-align:left;">Id estado</th>
                
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
			    <td><?php echo $r->getId_estado(); ?></td>	 
                            
			<td><a href= "../formularios/frm_UPdate_telefono.php?id=<?php echo $r->getId(); ?>">Editar</a></td>
         		<td><a href="../procesos/proceso_Delete_telefono.php?id=<?php echo $r->getId(); ?>">Eliminar</a></td>
										
			                         
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
