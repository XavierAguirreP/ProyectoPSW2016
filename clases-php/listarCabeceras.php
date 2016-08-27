<?php

//CLASS

require_once("conexion.php");

require_once("cabeceraOrdenColector.php");

//Inicializacion


$model = new CabeceraOrdenColector();



?>


<!DOCTYPE html>
<html>
<head>
	<title>Probando colector de cabecera orden</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="#">Volver</a>
			<br>
			<br>
            <a href="#">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID</th>
            			<th style="text-align:left;">Nombre cliente</th>
            			<th style="text-align:left;">Fecha Pedido</th>
            			<th style="text-align:left;">Fecha Entrega</th>
            			<th style="text-align:left;">Estado</th>
            			<!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>

            		</tr>
            	</thead>
            		<?php foreach ($model->ListarCabeceras() as $r): ?>
            			<tr>
            				<td><?php echo $r-> getId();  ?></td>
            				<td><?php echo $r-> getIdCliente(); ?></td>
            				<td><?php echo $r-> getFechaPedido(); ?></td>
            				<td><?php echo $r-> getFechaEntrega(); ?></td>
            				<td><?php echo $r-> getEstado(); ?></td>

            				<!- OPTIONS ->


            			</tr>
            		<?php endforeach; ?>
            </table>

		</div>
	</div>

</body>
</html>
