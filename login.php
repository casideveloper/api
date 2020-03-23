<?php

$correo = $_REQUEST['emausu'];

$cnx = new PDO("mysql:host=localhost;dbname=set27per_xamarin","set27per_danielvalerio","PM205356");
$res = $cnx->query("select * from usuario where emausu='$correo'");

$datos = array();

foreach($res as $row) {
    
    array_push($datos, array(
        
        'idusu' => $row['idusu'],
        'nomusu' => $row['nomusu'],
        'patusu' => $row['patusu'],
        'matusu' => $row['matusu'],
        'emausu' => $row['emausu']
        
    ));
    
}

echo utf8_decode(json_encode($datos));

?>
