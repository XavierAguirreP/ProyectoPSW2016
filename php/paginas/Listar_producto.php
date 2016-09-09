<?php
   require_once("../clases/conexion.php");
   require_once("../clases/producto.php");
   require_once("../clases/productoColector.php");

   $alm = new producto();
   $model = new productoColector();
   $id= 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRACION PRODUCTOS</title>
</head>
<body>
	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
				<a href="Administrator.php">Regresar</a>
			<br>
			<br>
				<a href="../formularios/frm_Create_producto.php">Nuevo</a>
			<br>
			<br>
			<table class="pure-table pure-table-horizontal" border="1">
			   <thead>
			      <tr>
				 <th style="text-align:left;">ID</th>
				 <th style="text-align:left;">DESCRIPCION</th>
				 <th style="text-align:left;">FOTO</th>
				 <th style="text-align:left;">PRECIO</th>
				 <th style="text-align:left;">SABOR DE MASA</th>
				 <th style="text-align:left;">SABOR DE RELLENO</th>
				 <th style="text-align:left;">CANTIDAD EN UNIDADES</th>
				 <th style="text-align:left;">CATEGORIA</th>
				 <th style="text-align:left;">Option</th>
				 <th style="text-align:left;">Option</th>
			      </tr>
			   </thead>
			   <?php foreach ($model->ReadProducto() as $r): ?>
			      <tr>
				 <td><?php echo $r-> getId_producto();  ?></td>
				 <td><?php echo $r-> getDescripcion_producto(); ?></td>
				 <td><img src="<?php echo $r-> getFoto_producto(); ?>" /></td>
				 <td><?php echo $r-> getPrecio_producto(); ?></td>
				 <td><?php echo $r-> getSabor_masa(); ?></td>
				 <td><?php echo $r-> getSabor_relleno(); ?></td>
				 <td><?php echo $r-> getPorcion(); ?></td>
				 <td><?php echo $r-> getFK_categoria(); ?></td>
				 <td><a href="../formularios/frm_Update_producto.php?id=<?php echo $r->getId_producto(); ?> & descripcion=<?php echo $r-> getDescripcion_producto(); ?> & foto=<?php echo $r-> getFoto_producto(); ?> & precio=<?php echo $r-> getPrecio_producto(); ?> & sabor_masa=<?php echo $r-> getSabor_masa(); ?> & sabor_relleno=<?php echo $r-> getSabor_relleno(); ?> & porcion=<?php echo $r-> getPorcion(); ?> & id_categoria=<?php echo $r-> getFK_categoria(); ?>">Actualizar</a></td>
				 <td><a href="../procesos/proceso_Delete_producto.php?id=<?php echo $r->getId_producto(); ?>">Borrar</a></td>
			      </tr>
			   <?php endforeach; ?>
			</table>
		</div>
	</div>
</body>
</html>
