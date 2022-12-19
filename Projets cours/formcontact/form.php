<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "warmdarkrai@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.php">homepage</a>.</p>
        
    </div>
';


?>