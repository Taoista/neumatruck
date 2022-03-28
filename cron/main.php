<?php
$mysql_hostname = "localhost";
$mysql_user = "neum45356_neumatruck";
$mysql_password = "7340458Tao";
$mysql_database = "neum45356_neumatruck";

$base = new PDO('mysql:host='.$mysql_hostname.'; dbname='.$mysql_database, $mysql_user, $mysql_password);
$base->exec("SET CHARACTER SET utf8");



$sql2 = "INSERT INTO demo_crono (data_crono) VALUE('pipo')";
$stmt= $base->prepare($sql2);
$stmt->execute();
$stmt->closeCursor();



?>