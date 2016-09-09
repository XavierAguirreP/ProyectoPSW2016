<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../php/paginas/login.html");
  exit();
}
require_once '../clases/domicilioColector.php';
require_once'../clases/domicilio.php';
if(isset($_POST["id"]) && isset($_POST["direccionDescriptiva"])&& isset($_POST["callePrincipal"])&& isset($_POST["calleSecundaria"])&& isset($_POST["numeracion"])){

    $obj = new Domicilio();
    $obj->setDireccionDescriptiva($_POST["direccionDescriptiva"]);
    $obj->setCallePrincipal($_POST["callePrincipal"]);
    $obj->setCalleSecundaria($_POST["calleSecundaria"]);
    $obj->setNumeracion($_POST["numeracion"]);
    $obj->setId(($_POST["id"]);

            if($coll->UpdateDomicilio($obj)){
              //var_dump($obj);
              header("Location: http:../php/paginas/Listar_domicilios.php");
              exit();
            }else{
              ?>
              !DOCTYPE html>
              <html>
              <head>
              	<title>PROCESS - UPDATE -DOMICILIO</title>
              </head>
              <body>
              	<br>
              	<a href="../paginas/Listar_domicilios.php">Volver</a>

              </body>
              </html>


              <?php
            }


}else{
  ?>
  !DOCTYPE html>
  <html>
  <head>
  	<title>PROCESS - UPDATE - DOMICILIO</title>
  </head>
  <body>
  	<br>
  	<a href="../paginas/Listar_domicilios.php">Volver</a>

  </body>
  </html>
<?php }
