<?php

$correo = $_REQUEST['correo'];

$cnx = new PDO("mysql:host=localhost;dbname=set27per_navidad","set27per_valerio","SopWiener7809");
$res = $cnx->query("select * from usuarios where correo='$correo'");

$datos = array();

foreach($res as $row) {
    
    array_push($datos, array(
        
        'codigo' => $row['codigo'],
        'nombre' => $row['nombre'],
        'edad' => $row['edad'],
        'correo' => $row['correo'],
        'pas' => $row['pas']
        
    ));
    
}

echo utf8_decode(json_encode($datos));


?>