<?php
ini_set('display_errors', '1');
  require 'collector.php';
  require 'demo.php';
  class DireccionCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addDireccion($direccion)
   {
     return self::execQuery("INSERT INTO direccion(nombre_direccion,calle_principal,calle_secundaria,numeracion,nombre_sector) VALUES('".$direccion->getNombreDireccion()."','".$direccion->getCallePrincipal()."','".$direccion->getCalleSecundaria()."','".$direccion->getNumeracion()."','".$direccion->getNombreSector()."')");
   }

   public function getNombreDir($id)
   {

    $stmt = $this->con->prepare("SELECT * FROM direccion WHERE id_direccion=:id");
    $stmt->execute(array(":id"=>$id));
    $domicilio=$stmt->fetchObject("Direccion");
    return $domicilio;
   }
   public function readAllDirecciones(){

      return self::read('direccion','direccion');


  }

   public function updateDireccion($direccion)
   {
    try
    {
      self::execQuery("UPDATE direccion SET id_direccion='".$direccion->getId()."',nombre_direccion='".$direccion->getNombreDireccion()."',calle_principal='".$direccion->getCallePrincipal()."',calle_secundaria='".$direccion->getCalleSecundaria()."',numeracion='".$direccion->getNumeracion()."',nombre_sector='".$direccion->getNombreSector()."' WHERE id_direccion=".$direccion->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function deleteDireccion($direccion)
   {
    try
    {
      self::execQuery("DELETE FROM direccion WHERE id_direccion=".$direccion);

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }
}
?>
