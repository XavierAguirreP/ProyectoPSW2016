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
		<title>Consultar</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">id</th>
                            <th style="text-align:left;">numero</th>
                            
			    <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarTelefono() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId(); ?></td>
                            <td><?php echo $r->getNumero(); ?></td>  
                                                 
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
