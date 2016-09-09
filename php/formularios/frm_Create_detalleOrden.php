<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/detalleOrdenColector.php';
require_once '../clases/detalleOrden.php';

?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="../procesos/procesoCreate_detalle_orden.php" method="post">
      <div>
        <label for="cantidad">Nueva cantidad </label>
        <input type="text" name="cantidad" value="30"><br>
      </div>
      <div>
        <label for="subtotal">Subtotal </label>
        <input type="text" name="subtotal" value="19.90"><br>
      </div>
      <div>
        <label for="iva">I.V.A.</label>
        <input type="text" name="iva" value="2.80"><br>
      </div>
      <div>

      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
