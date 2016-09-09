<?php

//CLASS

require_once("../clases/conexion.php");
require_once("../clases/roles.php");
require_once("../clases/rolCollector.php");

//Inicializacion

$alm = new roles();
$model = new rolCollector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Rol - Consulta</title>
</head>
<body>

	<div class="pure-g">
            <div class="pure-u-1-12">
                  <br>
                  <a href="Administrator.php">Volver</a>
                  <br>
                  <br>
            <a href="../formularios/Frm_Create_roles.php">Create</a>
            <br>
            <br>
            <p>Espacios en blanco = FALSE</p>
            <table class="pure-table pure-table-horizontal" border="1">
                  <thead>
                        <tr>
                              <!- Tabla de la base de datos->
                              <th style="text-align:left;">ID</th>
                              <th style="text-align:left;">Crear</th>
                              <th style="text-align:left;">Consultar</th>
                              <th style="text-align:left;">Actualizar</th>
                              <th style="text-align:left;">Eliminar</th>
                              <!- Opciones para la administracion ->
                              <th style="text-align:left;">Option</th>
                              <th style="text-align:left;">Option</th>
                              
                        </tr>
                  </thead>
                        <?php foreach ($model->ListarRoles() as $r): ?>
                              <tr>
                                    <td><?php echo $r-> get_Id();  ?></td>
                                    <td><?php echo $r-> get_Crear(); ?></td>
                                    <td><?php echo $r-> get_Consultar(); ?></td>
                                    <td><?php echo $r-> get_Actualizar(); ?></td>
                                    <td><?php echo $r-> get_Eliminar(); ?></td>

                                    <!- OPTIONS ->

                                    <td><a href="../formularios/frm_Update_roles.php?id=<?php echo $r->get_Id();?>&crear=<?php echo $r->get_Crear();?>&consultar=<?php echo $r->get_Consultar();?>&actualizar=<?php echo $r->get_Actualizar();?>&eliminar=<?php echo $r->get_Eliminar();?>">Update</a></td>
                                    <td><a href="../procesos/proceso_Delete_roles.php?id=<?php echo $r->get_Id(); ?>">Delete</a></td>

                              </tr>
                        <?php endforeach; ?>
            </table>
                  
            </div>
      </div>

</body>
</html>