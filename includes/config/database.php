<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect("db", 'root', '', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}