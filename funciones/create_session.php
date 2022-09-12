<?php
session_start();
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$email = $_GET["email"];

if(empty($email)){
    echo "error";
}else{
    $_SESSION["idunica"] = strtolower(trim($email));
    echo $email;
}




?>