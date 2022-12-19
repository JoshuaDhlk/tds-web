<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="contact container">
      <div>
        <h1 class="section-title">Info <span>contact</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Numéro de téléphone</h1>
            <h2>06 95 66 44 63</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>Joshua.dahlke@hotmail.com</h2>
            <h2>Joshua.dahlke@sts-sio-caen.info</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Adresse</h1>
            <h2>7 allée de marronniers 27260</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form">
        <h1>Contact Me</h1>
        <p>Feel free to contact us and we will get back to you ass sson as we can.</p>
        <form action="form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
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


