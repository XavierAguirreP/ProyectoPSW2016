<?php

//CLASS

require_once("../clases/conexion.php");
require_once("../clases/tipo_usuario.php");
require_once("../clases/tipo_userCollector.php");

//Inicializacion

$alm = new tipo_usuario();
$model = new tipo_userCollector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - TipoUsuario - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="Administrator.php">Volver</a>
			<br>
			<br>
            <a href="../formularios/Frm_Create_tipo_usuario.php">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID</th>
            			<th style="text-align:left;">Descripción</th>
            			
                              <!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarTipoUsuario() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_Id();  ?></td>
            				<td><?php echo $r-> get_Descripcion(); ?></td>
            				
            				<!- OPTIONS ->

            				<td><a href="../formularios/frm_Update_tipo_usuario.php?id=<?php echo $r->get_Id();?>&descripcion=<?php echo $r->get_Descripcion();?> ">Update</a></td>
            				<td><a href="../procesos/proceso_Delete_tipo_usuario.php?id=<?php echo $r->get_Id(); ?>">Delete</a></td>

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>