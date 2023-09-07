<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'Fac563020!!!', 'formulario_crud');

if(!$db) {
    echo "Hubo un error";
    exit;
    }

    return $db;
}


