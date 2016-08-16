<?php
require_once("evento.php");
$tra=new Trabajo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $tra->add();
    exit;
}

?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>eventos</title>
</head>

<body>
<p>
<a href="index.php" title="Volver Atrás">Volver Atrás</a>
</p>
<?php
if(isset($_GET["m"]))
{
    switch($_GET["m"])
    {
        case '1':
            ?>
            <h4 style="color: red;">Los datos están vacíos</h4>
            <?php
        break;
        case '2':
            ?>
            <h4 style="color: green;">Evento ha sido creado</h4>
            <?php
        break;
    }
}
?>
<h2>Crear Nuevo evento</h2>
<form name="form" action="" method="post">
    Título : <input type="text" name="nom" />
    <br />
    Texto : <textarea name="texto" cols="30" rows="5"></textarea>
    <hr />
    <input type="hidden" name="grabar" value="si" />
    <input type="submit" value="Crear" title="Crear" />
</form>
</body>
</html>
