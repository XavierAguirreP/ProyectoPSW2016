 <?php
require_once 'conexion.php';


$n= "admin";
$p= "1234";
$Nombre = $_GET['Nombre'];
$Password = $_GET['Password'];



if ($Nombre == $n and $Password == $p)
{
echo "Bienvenido $n"  ;
echo nl2br(" \n ");
require_once "administracion.php";
}


else {
echo "usuario o contraseña incorrectos";
echo "
	<a href=\"index.html\">Regresar</a>
";

}

?>
