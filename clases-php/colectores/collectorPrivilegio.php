<?php

  require 'collector.php';
  require 'privilegio.php';
  class CollectorPrivilegio extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addPrivilegio($privilegio)
   {
     return self::execQuery("INSERT INTO privilegio(privilegio) VALUES".$privilegio->getPrivilegio());
   }

   public function getPrivilegioObj($codigo)
   {
    $stmt = self::$con->prepare("SELECT * FROM demo WHERE codigo=:codigo");
    $stmt->execute(array(":codigo"=>$codigo));
    $privilegio=$stmt->fetch(PDO::FETCH_ASSOC);
    return $privilegio;
   }
   public function readAllPrivilegios(){

      return self::read('privilegio','Privilegio');


  }

   public function updatePrivilegio($privilegio)
   {
    try
    {
      self::execQuery("UPDATE privilegio SET privilegio".$privilegio->getPrivilegio()."\' WHERE id=".$privilegio->getCodigo());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function deletePrivilegio($privilegio)
   {
    try
    {
      self::execQuery("DELETE FROM privilegio WEHRE codigo=".$privilegio->getCodigo());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }
}
