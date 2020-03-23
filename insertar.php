<?php

$nom = $_REQUEST['nom'];
$edad = $_REQUEST['edad'];
$cor = $_REQUEST['cor'];
$pas = $_REQUEST['pas'];

$cnx = new PDO("mysql:host=localhost;dbname=set27per_navidad","set27per_valerio","SopWiener7809");
$cnx->query("insert into usuarios values(null,'$nom','$edad','$cor','$pas')");

?>

