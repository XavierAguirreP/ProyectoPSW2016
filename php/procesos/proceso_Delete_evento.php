<?php

require_once ('../clases/eventoColector.php');
require_once ('../clases/evento.php');


$alm = new evento();
$model = new eventoColector();

$id = $_GET['id'];

echo $id;
$result = $model->DeleteEvento($id);

?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE - TIPO USER</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="../paginas/Listar_evento.php">Consultar</a>


</body>
</html>
 

