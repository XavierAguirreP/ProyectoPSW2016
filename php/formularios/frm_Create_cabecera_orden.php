<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/cabeceraOrdenColector.php';
require_once '../clases/CabeceraOrden.php';



?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="../procesos/procesoCreate_cabecera_orden.php" method="post">
      <div>
        <label for="idCliente">Nuevo id de cliente </label>
        <input type="text" name="idCliente" value="001"><br>
      </div>
      <div>
        <label for="">Fecha de emisión </label>
        <input type="text" name="fechaEmision" value="dd,mm,aaaa"><br>
      </div>
      <div>
        <label for="fechaEntrega">Fecha de entrega </label>
        <input type="text" name="fechaEntrega" value="dd,mm,aaaa"><br>
      </div>
      <div>
        <label for="estado">Estado </label>
        <input type="text" name="estado" value="cancelado"><br>
      </div>
      <div>
        <label for="iva">Iva </label>
        <input type="text" name="iva" value="12% del total"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
