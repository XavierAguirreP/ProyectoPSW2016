<?php

//CLASS

require_once("../clases/conexion.php");
require_once("../clases/persona.php");
require_once("../clases/personaColector.php");

//Inicializacion

$alm = new persona();
$model = new personaColector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Persona - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="../paginas/Administrator.php">Volver</a>
			<br>
			<br>
            <a href="../formularios/frm_crear_persona.php">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">Id_persona</th>
            			<th style="text-align:left;">Cedula de identidad</th>
            			<th style="text-align:left;">Nombres</th>
            			<th style="text-align:left;">Apellido Paterno</th>
            			<th style="text-align:left;">Apellido Materno</th>

				<th style="text-align:left;">Fecha de Nacimiento</th>
				<th style="text-align:left;">Lugar de Nacimiento</th>
            			<th style="text-align:left;">Sexo</th>
            			<th style="text-align:left;">Estado civil</th>








            			<!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarPersona() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_Id();  ?></td>
            				<td><?php echo $r-> get_Cedula_identidad(); ?></td>
            				<td><?php echo $r-> get_Nombres(); ?></td>
            				<td><?php echo $r-> get_Apellido_paterno(); ?></td>
            				<td><?php echo $r-> get_Apellido_materno(); ?></td>
					
					<td><?php echo $r-> get_Fecha_nacimiento(); ?></td>
            				<td><?php echo $r-> get_Lugar_nacimiento(); ?></td>
					<td><?php echo $r-> get_Sexo(); ?></td>
            				<td><?php echo $r-> get_Estado_civil(); ?></td>

            				<!- OPTIONS ->

            				<td><a href="../formularios/frm_update_persona.php?id=<?php echo $r->get_Id(); ?>">Update</a></td>
            				<td><a href="../procesos/proceso_delete_persona.php?id=<?php echo $r->get_Id(); ?>">Delete</a></td>

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>
