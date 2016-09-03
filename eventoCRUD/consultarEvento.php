<?php
require_once 'eventoColector.php';
require_once 'conexion.php';
require_once 'evento.php';


$alm = new evento();
$model = new eventoColector();

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
                            <th style="text-align:left;">tipo_evento</th>
                            <th style="text-align:left;">nombre_tematica</th>
			    <th style="text-align:left;">descripcion</th>
                            <th style="text-align:left;">precio</th>
                            <th style="text-align:left;">fecha_evento</th>
			    <th style="text-align:left;">num_personas</th>
                            
			    <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarEvento() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId(); ?></td>
                            <td><?php echo $r->getTipo_evento(); ?></td>  
                            <td><?php echo $r->getNombre_tematica(); ?></td>
			    <td><?php echo $r->getDescripcion(); ?></td>  
                            <td><?php echo $r->getPrecio(); ?></td>  
                      	    <td><?php echo $r->getFecha_evento(); ?></td>  
                            <td><?php echo $r->getNUm_personas(); ?></td>  
                      	
                      
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
