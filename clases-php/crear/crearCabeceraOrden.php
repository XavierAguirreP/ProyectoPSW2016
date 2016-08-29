<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/prueba/login/"); //editar path
  exit();
}
require 'CabeceraOrdenColector.php';
if(isset($_POST["nombre"])){
  $vCollector = new CabeceraOrdenColector();


  $cabecera = new CabeceraOrden();
  $cabecera->setIdCliente($_POST["idCliente"]);
  $cabecera->setFechaEmision($_POST["fechaEmision"]);
  $cabecera->setFechaEntrega($_POST["fechaEntrega"]);
  $cabecera->setEstado($_POST["estado"]);
  $cabecera->setIva($_POST["iva"]);


          if($vCollector->InsertCabeceraOrden(cabecera)){
            echo"Cabecera agregada con éxito";

            header("Location: http://localhost/prueba/clases-php/demo"); /*no olvidar editar los paths*/
            exit();
          }else{
              echo "Hubo un error al intentar insetar la cabecera.";
          }
    } else {
        echo "Error al insetar la cabecera";
    }

}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form enctype="multipart/form-data"  action="crearCabeceraOrden.php" method="post">
      <div>
        <label for="idCliente">Crear nueva cabecera de orden </label>
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
        <input type="text" name="estado" value="Mickey"><br>
      </div>
      <div>
        <label for="iva">Iva </label>
        <input type="text" name="iva" value="Mickey"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }
