<?php
   require_once("../clases/conexion.php");
   require_once("../clases/estado.php");
   require_once("../clases/estadoColector.php");

   $alm = new estado();
   $model = new estadoColector();
   $id= 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRACION ESTADOS</title>
</head>
<body>
	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
				<a href="Administrator.php">Regresar</a>
			<br>
			<br>
				<a href="../formularios/frm_Create_estado.php">Nuevo</a>
			<br>
			<br>
			<table class="pure-table pure-table-horizontal" border="1">
			   <thead>
			      <tr>
				 <th style="text-align:left;">ID</th>
				 <th style="text-align:left;">DESCRIPCION</th>
				 <th style="text-align:left;">Option</th>
				 <th style="text-align:left;">Option</th>
			      </tr>
			   </thead>
			   <?php foreach ($model->ReadEstado() as $r): ?>
			      <tr>
				 <td><?php echo $r-> getId_estado();  ?></td>
				 <td><?php echo $r-> getDescripcion_estado(); ?></td>
				 <td><a href="../formularios/frm_Update_estado.php?id=<?php echo $r->getId_estado(); ?> & descripcion=<?php echo $r-> getDescripcion_estado(); ?>">Actualizar</a></td>
				 <td><a href="../procesos/proceso_Delete_estado.php?id=<?php echo $r->getId_estado(); ?>">Borrar</a></td>
			      </tr>
			   <?php endforeach; ?>
			</table>
		</div>
	</div>
</body>
</html>
