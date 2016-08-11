<?php

require 'demoCollector.php';
require 'Demo.php';

    $coll = new CollectorDemo();

if(isset($_GET["id"])){

    $obj = $coll->getDemo($_GET["id"]);

    ?>
    <form action="editar.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $obj->getNombre(); ?>" />
        </div>

        <div class="button">
            <button type="submit">Actualizar</button>
        </div>"
    </form>

   <?php
}else if(isset($_POST["id"]) && isset($_POST["nombre"])){

    $obj = new Demo();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);

    if($coll->updateDemo($obj)){
        echo "Demo actualizado con éxito";
    }else{
        echo "Hubo un error al intentar actualizar el Demo.";
    }

}else{
    echo "derp.";
}
