<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/admin/login/");
  exit();
}
require '../colectores/domicilioColector.php';

    $coll = new DemoCollector();

if(isset($_GET["id"])){

    $obj = $coll->ConsultarDomicilio($_GET["id"]);

    ?>
    <form enctype="multipart/form-data" action="editarDomicilio.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="direccionDescriptiva">Direccion descriptiva</label>
            <input type="text" name="direccionDescriptiva" value="<?php echo $obj->getDireccionDescriptiva();?>"><br>
      </div>
      <div>
          <label for="callePrincipal">Calle Principal</label>
          <input type="text" name="callePrincipal" value="<?php echo $obj->getCallePrincipal();?>"><br>
    </div>
    <label for="calleSecundaria">Calle Secundaria</label>
    <input type="text" name="calleSecundaria" value="<?php echo $obj->getCalleSecundaria();?>"><br>
</div>
<label for="numeracion">Numeracion</label>
<input type="text" name="numeracion" value="<?php echo $obj->getNumeracion();?>"><br>
</div>

        <div class="button">
            <button type="submit">Actualizar</button>
        </div>
    </form>

   <?php
}else if(isset($_POST["id"]) && isset($_POST["direccionDescriptiva"])&& isset($_POST["callePrincipal"])&& isset($_POST["calleSecundaria"])&& isset($_POST["numeracion"])){

    $obj = new Domicilio();
    $obj->setDireccionDescriptiva($_POST["direccionDescriptiva"]);
    $obj->setCallePrincipal($_POST["callePrincipal"]);
    $obj->setCalleSecundaria($_POST["calleSecundaria"]);
    $obj->setNumeracion($_POST["numeracion"]);

            if($coll->UpdateDomicilio($obj)){
              //var_dump($obj);
              header("Location: http://localhost/prueba/admin/clases-php/mostrar/indexDomicilios.php");
              exit();
            }else{
                echo "Hubo un error al intentar actualizar el domicilio.";
            }


}else{
    header("Location: http://localhost/prueba/admin/clases-php/login");
    exit();
}
?>
