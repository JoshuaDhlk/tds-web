<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "warmdarkrai@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
    <p class="back">Go back to the <a href="index.php">homepage</a>.</p>
';


?>