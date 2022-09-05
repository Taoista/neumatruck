<?php
session_start();

$email = $_GET["email"];

if(empty($email)){
    echo "error";
}else{
    $_SESSION["idunica"] = strtolower(trim($email));
    echo $email;
}




?>