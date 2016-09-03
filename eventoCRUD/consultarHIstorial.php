<?php
require_once 'historialColector.php';
require_once 'conexion.php';
require_once 'historial.php';


$alm = new historial();
$model = new historialColector();

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
                            <th style="text-align:left;">id_cliente</th>
                            <th style="text-align:left;">linea</th>
                            <th style="text-align:left;">id_cabecera_order</th>
			    
			    <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarHIstorial() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_cliente(); ?></td>
                            <td><?php echo $r->getLinea(); ?></td>  
                            <td><?php echo $r->getId_cabecera_order(); ?></td>
			                          
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
