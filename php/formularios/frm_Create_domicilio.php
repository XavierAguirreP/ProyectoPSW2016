<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http://localhost/php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/domicilioColector.php';
require_once '../clases/domicilio.php';



?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="../procesos/procesoCreate_domicilio.php" method="post">
      <div>
        <label for="direccionDescriptiva">Crear nuevo domicilio </label>
        <input type="text" name="direccionDescriptiva" value="Urb. Entre Lagos, mz..."><br>
      </div>
      <div>
        <label for="callePrincipal">Calle principal </label>
        <input type="text" name="callePrincipal" value="Av. de las Américas"><br>
      </div>
      <div>
        <label for="calleSecundaria">Calle secundaria </label>
        <input type="text" name="calleSecundaria" value="Ilanes"><br>
      </div>
      <div>
        <label for="numeracion">Numeración </label>
        <input type="text" name="numeracion" value="Mickey"><br>
      </div>

      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
