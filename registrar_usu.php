<?php

$nomusu = $_REQUEST['nomusu'];
$patusu = $_REQUEST['patusu'];
$matusu = $_REQUEST['matusu'];
$emausu = $_REQUEST['emausu'];

$cnx = new PDO("mysql:host=localhost;dbname=set27per_xamarin","set27per_daniel","PM205356");
$cnx->query("insert into usuario values(null,'$nomusu','$patusu','$matusu','$emausu')");

?>