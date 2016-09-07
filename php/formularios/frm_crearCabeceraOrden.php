<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/php/paginas/login.html"); //editar path
  exit();
}
require_once '../clases/cabeceraOrdenColector.php';
require_once '../clases/CabeceraOrden.php'
if(isset($_POST["idCliente"]) && isset($_POST["fechaEmision"]) && isset($_POST["fechaEntrega"]) && isset($_POST["estado"]) && isset($_POST["iva"])){
  $vCollector = new CabeceraOrdenColector();


  $cabecera = new CabeceraOrden();
  $cabecera->setIdCliente($_POST["idCliente"]);
  $cabecera->setFechaEmision($_POST["fechaEmision"]);
  $cabecera->setFechaEntrega($_POST["fechaEntrega"]);
  $cabecera->setEstado($_POST["estado"]);
  $cabecera->setIva($_POST["iva"]);


          if($vCollector->InsertCabeceraOrden(cabecera)){
            echo"Cabecera agregada con éxito";

            header("Location: http://localhost/php/paginas/listar_cabeceras.php"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar la cabecera.";
              echo "<a href=../paginas/listar_cabeceras.php>Volver</a>";
          }
    } else {
        echo "Error al insetar la cabecera";
        echo "<a href=../paginas/listar_cabeceras.php>Volver</a>";
    }

}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="frm_crearCabeceraOrden.php" method="post">
      <div>
        <label for="idCliente">Nuevo id de cliente </label>
        <input type="text" name="idCliente" value="001"><br>
      </div>
      <div>
        <label for="">Fecha de emisión </label>
        <input type="text" name="fechaEmision" value="dd,mm,aaaa"><br>
      </div>
      <div>
        <label for="fechaEntrega">Fecha de entrega </label>
        <input type="text" name="fechaEntrega" value="dd,mm,aaaa"><br>
      </div>
      <div>
        <label for="estado">Estado </label>
        <input type="text" name="estado" value="pendiente"><br>
      </div>
      <div>
        <label for="iva">Iva </label>
        <input type="text" name="iva" value="12% del total"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }
