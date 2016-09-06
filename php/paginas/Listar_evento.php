<?php
require_once("../clases/conexion.php");
require_once("../clases/evento.php");
require_once("../clases/eventoColector.php");

$alm = new evento();
$model = new eventoColector();

$id= 0;
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Evento List</title>       
	</head>
    <body style="padding:15px;">
		<h2>*** EVENTO LIST **</h2>
        <div class="pure-g">
            <div class="pure-u-1-12">
			
			<br>
            		<a href="../formularios/Frm_Create_evento.php">crear</a>
            		<br>
          		<br>                     
                <table class="pure-table pure-table-horizontal"  border="1">
                    <thead>
                        
                        <tr>
              		    <th style="text-align:left;">Id</th>
                	    <th style="text-align:left;">Tipo de evento</th>
                	    <th style="text-align:left;">Nombre de tematica</th>
			    <th style="text-align:left;">Descripcion</th>
			    <th style="text-align:left;">Fecha evento</th>
			    <th style="text-align:left;">Precio</th>
			    <th style="text-align:left;">Numero de personas</th>	 			    

                	    <th style="text-align:left;">opcion</th>
                            <th style="text-align:left;">opcion</th>



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
			    <td><?php echo $r->getFecha_evento(); ?></td>
                            <td><?php echo $r->getPrecio(); ?></td>	
		    	    <td><?php echo $r->getNum_personas(); ?></td>



			<td><a href= "frm_actualizarEvento.php?id=<?php echo $r->getId(); ?> ">Editar</a></td>
         		<td><a href="borrarEvento.php?id=<?php echo $r->getId(); ?>">Eliminar</a></td>
										
			                         
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
