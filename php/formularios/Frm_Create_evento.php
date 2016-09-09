<?php
require_once("../clases/eventoColector.php");	
require_once("../clases/evento.php");


$alm = new evento();
$model = new eventoColector();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo registro Evento</title>
</head>
<body style="padding:15px;">
	<h2>** Nuevo Evento ** </h2>
	<form id="principal" action="../procesos/procesoCreate_Evento.php" method="GET">
		<div>
			<br>
			<label>Tipo de Evento: </label>
			<br>
			<input type="text" name="tipo_evento">
		</div>
		<div>
			<label>Nombre Tematica: </label>
			<br>
			<input type="text" name="nombre_tematica">
		</div>
		<div>
			<label>Descripcion: </label>
			<br>
			<input type="text" name="descripcion">
		</div>
		<div>
			<label>Fecha de Evento: </label>
			<br>
			<input type="text" name="fecha_evento">
		</div>
		<div>
			<label>Precio: </label>
			<br>
			<input type="text" name="precio">
		</div>
		<div>
			<label>Numero de Personas: </label>
			<br>
			<input type="text" name="num_personas">
		</div>
		<div>
			<br>
			<input type="submit" name="enviar" value="Guardar">
			
			<tr>
			        <td width="50%" class="tdblock">
			        	<input class="mkbutton" value="Cancelar" name="submit" type="button" 						onclick="window.location.href = '../paginas/Listar_evento.php';" />
        			</td>
    			</tr>
		
		</div>
	</form>
</body>
</html>    

