<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html");
  exit();
}
require_once '../clases/cabeceraOrdenColector.php';
require_once'../clases/cabeceraOrden.php';

    $coll = new CabeceraOrdenColector();

if(isset($_GET["id"])){

    $obj = $coll->ConsultarCabeceraOrden($_GET["id"]);

    ?>
    <form enctype="multipart/form-data" action="../procesos/procesoUpdate_cabecera_orden.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="idCliente">ID cliente</label>
            <input type="text" name="idCliente" value="<?php echo $obj->getIdCliente();?>"><br>
      </div>
      <div>
          <label for="fechaEmision">Fecha de emisión</label>
          <input type="text" name="fechaEmision" value="<?php echo $obj->getFechaEmision();?>"><br>
    </div>
    <div>
    <label for="fechaEntrega">Fecha de entrega</label>
    <input type="text" name="fechaEntrega" value="<?php echo $obj->getFechaEntrega();?>"><br>
  </div>
  <div>
      <label for="estado">Estado</label>
      <input type="text" name="estado" value="<?php echo $obj->getEstado();?>"><br>
  </div>
  <div>
      <label for="iva">Iva</label>
      <input type="text" name="iva" value="<?php echo $obj->getIva();?>"><br>
  </div>

        <div class="button">
            <button type="submit">Actualizar</button>
        </div>
    </form>
<?php
} else {
  header("Location: http:../php/paginas/login.html");
  exit();
}
