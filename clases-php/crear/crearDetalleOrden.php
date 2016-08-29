<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/"); //editar path
  exit();
}
require 'detalleOrdenColector.php';
if(isset($_POST["idCabecera"]) && isset($_POST["idProducto"])){
  $vCollector = new DetalleOrdenColector();


  $obj = new DetalleOrden();
  $obj->setCantidad($_POST["cantidad"]);
  $obj->setSubtotal($_POST["subtotal"]);
  $obj->setIva($_POST["iva"]);



          if($vCollector->InsertDetalleOrden(obj)){
            echo"Domicilio agregado con éxito";

            header("Location: http://localhost/prueba/clases-php/demo"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar detalle de la orden.";
          }
    } else {
        echo "Error al insetar el detalle de la orden";
    }

}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="crearDetalleOrden.php" method="post">
      <div>
        <label for="cantidad">Crear nuevo domicilio </label>
        <input type="text" name="cantidad" value="30"><br>
      </div>
      <div>
        <label for="subtotal">Calle principal </label>
        <input type="text" name="subtotal" value="19.90"><br>
      </div>
      <div>
        <label for="iva">Fecha de entrega </label>
        <input type="text" name="iva" value="2.80"><br>
      </div>
      <div>

      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }
