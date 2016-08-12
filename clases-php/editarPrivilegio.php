<?php

require 'collectorPrivilegio.php';


    $coll = new CollectorPrivilegio();

if(isset($_GET["codigo"])){

    $obj = $coll->getPrivilegioObj($_GET["codigo"]);

    ?>
    <form action="editarPrivilegio.php" method="post">
    <input type="hidden" id="codigo" name="codigo" value="<?php echo $obj->getCodigo(); ?>"/>
        <div>
            <label for="privilegio">Privilegio:</label>
            <input type="text" id="privilegio" name="privilegio" value="<?php echo $obj->getPrivilegio(); ?>" />
        </div>

        <div class="button">
            <button type="submit">Actualizar</button>
        </div>"
    </form>

   <?php
}else if(isset($_POST["codigo"]) && isset($_POST["privilegio"])){

    $obj = new Privilegio();
    $obj->setCodigo($_POST["codigo"]);
    $obj->setPrivilegio($_POST["privilegio"]);

    if($coll->updatePrivilegio($obj)){
        echo "Privilegio actualizado con éxito";
    }else{
        echo "Hubo un error al intentar actualizar el priivlegio.";
    }

}else{
    echo "Houston,tenemos un problema";
}
