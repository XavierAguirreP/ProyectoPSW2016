<?php
   require_once("../clases/conexion.php");
   require_once("../clases/categoria.php");
   require_once("../clases/categoriaColector.php");

   $alm = new categoria();
   $model = new categoriaColector();
   $id= 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRACION CATEGORIAS DE PRODUCTOS</title>
</head>
<body>
	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
				<a href="Administrator.php">Regresar</a>
			<br>
			<br>
				<a href="../formularios/frm_Create_categoria.php">Nuevo</a>
			<br>
			<br>
			<table class="pure-table pure-table-horizontal" border="1">
			   <thead>
			      <tr>
				 <th style="text-align:left;">ID</th>
				 <th style="text-align:left;">DESCRIPCION</th>
				 <th style="text-align:left;">NOMBRE</th>
				 <th style="text-align:left;">CATEGORIA</th>
				 <th style="text-align:left;">Option</th>
				 <th style="text-align:left;">Option</th>
			      </tr>
			   </thead>
			   <?php foreach ($model->ReadCategoria() as $r): ?>
			      <tr>
				 <td><?php echo $r-> getId_categoria();  ?></td>
				 <td><?php echo $r-> getDescripcion_categoria(); ?></td>
				 <td><?php echo $r-> getNombre_categoria(); ?></td>
				 <td><?php echo $r-> getFK_estado(); ?></td>
				 <td><a href="../formularios/frm_Update_categoria.php?id=<?php echo $r->getId_categoria(); ?> & descripcion=<?php echo $r->getDescripcion_categoria(); ?> & nombre=<?php echo $r-> getNombre_categoria(); ?> & id_estado=<?php echo $r-> getFK_estado(); ?>">Actualizar</a></td>
				 <td><a href="../procesos/proceso_Delete_categoria.php?id=<?php echo $r->getId_categoria(); ?>">Borrar</a></td>
			      </tr>
			   <?php endforeach; ?>
			</table>
		</div>
	</div>
</body>
</html>
