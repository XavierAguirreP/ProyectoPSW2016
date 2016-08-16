 
<?php

require_once("colector.php");
	class eventocolector
	{
 
	 private $modelo;
	 public function __construct()
 		{
 		 $this->modelo = new colector();
 		 }
 
 	public function Listar()
 	   {
 	       try
 	       {
 	           $result = array();
		   $stm = $this->pdo->prepare("SELECT * FROM evento");
            	   $stm->execute();
                   foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
       		     {
       		        $evnt = new Evento();
		        $evnt->__SET('codigo', $r->codigo);
                	$evnt->__SET('nombre', $r->nombre);
                	$evnt->__SET('descripcion', $r->descripcion);
                        $result[] = $evnt;
            	     }

            		return $result;
              }
        	catch(Exception $e)
        	{
            	die($e->getMessage());
        	}
    	}
 
 
 		public function Insert()
 		{
 			try
			{
		    		$result= $this->modelo->operacion("insert into evento (codigo, nombre, descripcion) values (1,dd,dd);");
                       		return $result;
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
 
 		public function Update()
 		{
 			try
			{
		    		$result= $this->modelo->operacion("update evento set  where codigo = 1");
                       		return $result;
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
 		}	
 
 		public function Delete()
 		{
 			try
			{
		     		$result= $this->modelo->operacion("delete from evento where codigo = 2");
                       		return $result;
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
 		}
 
 	}
 ?>
