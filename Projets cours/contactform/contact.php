<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $POST['mail'];
    $message = $_POST['message'];

    $mailTo = "warmdarkrai@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Vous avez reçu un mail de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}