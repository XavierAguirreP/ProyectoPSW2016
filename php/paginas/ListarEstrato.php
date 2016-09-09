<?php

//CLASS

require_once("../clases/conexion.php");
require_once("../clases/estrato_social.php");
require_once("../clases/estratoColector.php");

//Inicializacion

$alm = new estrato_social();
$model = new estratoColector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Estrato Social - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="../paginas/Administrator.php">Volver</a>
			<br>
			<br>
            <a href="../formularios/frm_crear_estrato.php">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID Estrato Social: </th>
            			<th style="text-align:left;">Descripcion</th>

            			<!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarEstrato() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_Id();  ?></td>
            				<td><?php echo $r-> get_Descripcion(); ?></td>

            				<!- OPTIONS ->

            				<td><a href="../formularios/frm_update_estrato.php?id=<?php echo $r->get_Id(); ?>">Update</a></td>
            				<td><a href="../procesos/proceso_delete_estrato.php?id=<?php echo $r->get_Id(); ?>">Delete</a></td>

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>
