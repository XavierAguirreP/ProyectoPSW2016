<?php

//CLASS

require_once("../clases/conexion.php");
require_once("../clases/cliente.php");
require_once("../clases/clienteColector.php");

//Inicializacion

$alm = new cliente();
$model = new clienteColector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Cliente - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="../paginas/Administrator.php">Volver</a>
			<br>
			<br>
            <a href="../formularios/frm_crear_cliente.php">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID Cliente</th>
            			<th style="text-align:left;">Correo electronico</th>
            			<th style="text-align:left;">Id estrato social</th>
            			<th style="text-align:left;">Id domicilio</th>
            			<th style="text-align:left;">Id Telefono</th>
				<th style="text-align:left;">Id Estado</th>
            			<!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarCliente() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_Id();  ?></td>
            				<td><?php echo $r-> get_Correo_electronico(); ?></td>
            				<td><?php echo $r-> get_Id_estrato_social(); ?></td>
            				<td><?php echo $r-> get_Id_domicilio(); ?></td>
            				<td><?php echo $r-> get_Id_telefono(); ?></td>
					<td><?php echo $r-> get_Id_estado(); ?></td>

            				<!- OPTIONS ->

            				<td><a href="../formularios/frm_update_cliente.php?id=<?php echo $r->get_Id(); ?>">Update</a></td>
            				<td><a href="../procesos/proceso_delete_cliente.php?id=<?php echo $r->get_Id(); ?>">Delete</a></td>

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>
