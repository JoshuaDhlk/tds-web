<?php 

$to = 'joshua.dahlke@hotmail.com';
$subject = 'Mail Portfolio';
$name = htmlspecialchars($_POST['nom']);
$headers = 'From:' . htmlspecialchars($_POST['mail']) . '\r\n' ;
$message = htmlspecialchars($_POST['message']);




    if (!empty($_POST['mail']) and !empty($_POST['nom']) and !empty($_POST['message'])){
        mail($to, $subject, $message, $headers);
        echo 'envoyé';
    }
    else 
        echo 'erreur dans l\'envoie';

