 <?php
require_once 'conexion.php';


$n= "monica";
$p= "1234";
$Nombre = $_GET['Nombre'];
 


//echo $Nombre;
//echo "    ";
$Password = $_GET['Password'];
//echo $Password;


if ($Nombre == $n and $Password == $p)
{
echo "Bienvenida  ";
echo $Nombre;
echo nl2br(" \n ");

//conexion a la base 
$cone = new conexion();
//fin conexion a la base


require_once 'botones.php';
//$boto = new botones();



}

else {
echo "usuario o contraseña incorrectos";
}

?>


