<?php
require 'collectorPrivilegio.php';
$coll = new CollectorPrivilegio();
if(isset($_GET["codigo"])){
  $obj=$coll->getPrivilegioObj($_GET["codigo"]);

  if($coll->deletePrivilegio($obj)){
    echo "Privilegio eliminado con éxito";
  }
  else{
    echo "No se pudo eliminar el privilegio D:";
  }

}
else {
  echo "Privilegio no encontrado";
}
?>
