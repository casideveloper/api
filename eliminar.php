<?php

$cod = $_REQUEST['cod'];

$cnx = new PDO("mysql:host=localhost;dbname=set27per_navidad","set27per_valerio","SopWiener7809");
$cnx->query("delete from usuarios where codigo='$cod'");


?>

