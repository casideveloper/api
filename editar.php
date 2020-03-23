<?php

$cod = $_REQUEST['cod'];
$nom = $_REQUEST['nom'];
$edad = $_REQUEST['edad'];
$cor = $_REQUEST['cor'];
$pas = $_REQUEST['pas'];

$cnx = new PDO("mysql:host=localhost;dbname=set27per_navidad","set27per_valerio","SopWiener7809");
$cnx->query("update usuarios set nombre='$nom',edad=$edad,correo='$cor',pas='$pas' where codigo=$cod");

?>