<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: http:../php/paginas/login.html");
  exit();
}
require_once '../clases/domicilioColector.php';
require_once'../clases/domicilio.php';

    $coll = new DomicilioColector();

if(isset($_GET["id"])){

    $obj = $coll->ConsultarDomicilio($_GET["id"]);

    ?>
    <form enctype="multipart/form-data" action="../procesos/procesoUpdate_domicilio.php" method="post">
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
}
