<?php

echo "inciando"."<br>";

include_once("lib/class.imap.php");

$email = new Imap();

$inbox = null;

if($email->connect(
    "{mail.neumatruck.cl:143/notls}INBOX", 
    "contacto@neumatruck.cl", 
    "7340458Tao")){
    $inbox = $email->getMessages("html");
}


// echo '-> '.count($inbox).'<br>';

// echo .'<br>';

// echo $inbox.'<br>';

// echo count($inbox);

echo $inbox[1];

// print_r($inbox);

// for ($i=0; $i < count($inbox) ; $i++) { 
//     echo $inbox[0][$i].'<br>';
// }


echo "ending"."<br>";

?>