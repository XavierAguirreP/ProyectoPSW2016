<?php
    $nombre=pg_escape_string($_POST['nombre']);
    $colectorDemo= new CollectorDemo();
    $demo= new Demo();
    $demo ->setId(1);
    $demo ->setNombre($nombre);
    if($colectorDemo->addeDemo($demo)){
        echo "muerte a los humanos";
    }
    else{
        echo "D:<";
    }
