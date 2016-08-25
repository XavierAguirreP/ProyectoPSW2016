<?php
require_once 'demoColector.php';
require_once 'demo.php';

// Logica
$alm = new demo();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>inicio</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        
                    </thead>
					
					
                </table>     
				<span>
				
					<?php  
						 $model->InsertDEMO();
echo "se inserto registro, ejecute la consulta para verificar";
					?>
				</span>
            </div>
        </div>

    </body>
</html>
