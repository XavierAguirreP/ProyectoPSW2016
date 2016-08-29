<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/admin/login/");
  exit();
}
require '../colectores/cabeceraOrdenColector.php';

    $coll = new CabeceraOrdenColector();

if(isset($_GET["id"])){

    $obj = $coll->ConsultarCabeceraOrden($_GET["id"]);

    ?>
    <form enctype="multipart/form-data" action="editarCabeceraOrden.php" method="post">
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
}else if(isset($_POST["id"]) && isset($_POST["idCliente"])&& isset($_POST["fechaEntrega"])&& isset($_POST["fechaEmision"])&& isset($_POST["estado"])&& isset($_POST["iva"])){

    $obj = new CabeceraOrden();
    $obj->setIdCliente($_POST["idCliente"]);
    $obj->setFechaEntrega($_POST["fechaEntrega"]);
    $obj->setFechaEmision($_POST["fechaEmision"]);
    $obj->setEstado($_POST["estado"]);
    $obj->setIva($_POST["iva"]);

            if($coll->UpdateCabeceraOrden($obj)){
              //var_dump($obj);
              header("Location: http://localhost/prueba/admin/clases-php/mostrar/indexCabeceras.php");
              exit();
            }else{
                echo "Hubo un error al intentar actualizar la cabecera.";
            }


}else{
    header("Location: http://localhost/prueba/admin/clases-php/login");
    exit();
}
?>
