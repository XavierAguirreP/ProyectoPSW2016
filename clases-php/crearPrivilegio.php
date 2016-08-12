<?php
require 'collectorPrivilegio.php';
$coll = new CollectorPrivilegio();
if(isset($_POST["privilegio"])){
    $nombre=pg_escape_string($_POST["privilegio"]);
    $colectorPrivilegio= new CollectorPrivilegio();
    $privilegio= new Privilegio();
    $privilegio->setCodigo(001);
    $privilegio->setPrivilegio(nombre);
    if($colectorPrivilegio->addPrivilegio($privilegio)){
        echo "Privilegio creado con éxito";
    }
    else{
        echo "D:<";
    }
  }
    else{
?>
<form action="crearPrivilegio.php" method="post">

    <div>
        <label for="privilegio">Privilegio:</label>
        <input type="text" id="privilegio" name="privilegio" value="privilegio" />
    </div>

    <div class="button">
        <button type="submit">Crear privilegio</button>
    </div>"
</form>
<?php } ?>
