<?php
session_start();

$return = false;

if(!empty($_SESSION["idunica"])){
    $return =  true;
}
echo $return;

?>