<?php
require_once ('../clases/telefonoColector.php');
require_once ('../clases/telefono.php');


$alm = new telefono();
$model = new telefonoColector();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo registro Telefono</title>
</head>
<body style="padding:15px;">
	<h2>** Nuevo Telefono ** </h2>
	<form id="principal" action="procesoCrearTelefono.php" method="GET">
		<div>
			<br>
			<label>Numero: </label>
			<br>
			<input type="text" name="numero">
		</div>
		<div>
			<br>
			<input type="submit" name="enviar" value="Guardar">
			
			<tr>
			        <td width="50%" class="tdblock">
			        	<input class="mkbutton" value="Cancelar" name="submit" type="button" 						onclick="window.location.href = '../paginas/Listar_telefono.php';" />
        			</td>
    			</tr>

		</div>
	</form>
</body>
</html>    

