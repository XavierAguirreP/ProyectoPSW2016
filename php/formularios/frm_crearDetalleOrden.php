<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/detalleOrdenColector.php';
require_once '../clases/detalleOrdenColector.php';
if(isset($_POST["cantidad"]) && isset($_POST["subtotal"]) && isset($_POST["iva"])){
  $vCollector = new DetalleOrdenColector();


  $obj = new DetalleOrden();
  $obj->setCantidad($_POST["cantidad"]);
  $obj->setSubtotal($_POST["subtotal"]);
  $obj->setIva($_POST["iva"]);



          if($vCollector->InsertDetalleOrden(obj)){
            echo"Domicilio agregado con éxito";

            header("Location: http://localhost/php/paginas/listar_detalles.php"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar detalle de la orden.";
              echo "<a href=../paginas/listar_detalles.php>Volver</a>";
          }
    } else {
        echo "Error al insetar el detalle de la orden";
        echo "<a href=../paginas/listar_detalles.php>Volver</a>";
    }

}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="frm_crearDetalleOrden.php" method="post">
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
<?php
     }
?>
