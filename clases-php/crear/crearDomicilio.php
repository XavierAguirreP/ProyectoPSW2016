<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/"); //editar path
  exit();
}
require 'domicilioColector.php';
if(isset($_POST["direccionDescriptiva"])){
  $vCollector = new DomicilioColector();


  $obj = new Domicilio();
  $obj->setDireccionDescriptiva($_POST["direccionDescriptiva"]);
  $obj->setCallePrincipal($_POST["callePrincipal"]);
  $obj->setCalleSecundaria($_POST["calleSecundaria"]);
  $obj->setNumeracion($_POST["numeracion"]);



          if($vCollector->InsertDomicilio(obj)){
            echo"Domicilio agregado con éxito";

            header("Location: http://localhost/prueba/clases-php/demo"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar el domicilio.";
          }
    } else {
        echo "Error al insetar el domicilio";
    }

}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="crearDomicilio.php" method="post">
      <div>
        <label for="direccionDescriptiva">Crear nuevo domicilio </label>
        <input type="text" name="direccionDescriptiva" value="Urb. Entre Lagos, mz..."><br>
      </div>
      <div>
        <label for="callePrincipal">Calle principal </label>
        <input type="text" name="callePrincipal" value="Av. de las Américas"><br>
      </div>
      <div>
        <label for="calleSecundaria">Fecha de entrega </label>
        <input type="text" name="calleSecundaria" value="Ilanes"><br>
      </div>
      <div>
        <label for="numeracion">Estado </label>
        <input type="text" name="numeracion" value="Mickey"><br>
      </div>
      
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }
