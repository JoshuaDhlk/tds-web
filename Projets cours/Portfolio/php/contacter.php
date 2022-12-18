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
        <form action="contact.php" method="post">
          <label for="name">Nom:</label><br>
          <input type="text" id="name" name="name"><br>
          <label for="email">Email:</label><br>
          <input type="text" id="email" name="email"><br>
          <label for="subject">Sujet:</label><br>
          <input type="text" id="subject" name="subject"><br>
          <label for="message">Message:</label><br>
          <textarea id="message" name="message"></textarea><br>
          <input type="submit" value="Envoyer">
        </form> 
        <?php

// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Configuration de l'adresse e-mail de réception
$to = 'contact@example.com';
$subject = 'Nouveau message de '.$name;

// Contenu du message (en HTML)
$message = '
<html>
<head>
  <title>'.$subject.'</title>
</head>
<body>
  <p>Vous avez reçu un nouveau message de '.$name.'</p>
  <p><strong>Email:</strong> '.$email.'</p>
  <p><strong>Sujet:</strong> '.$subject.'</p>
  <p><strong>Message:</strong> '.$message.'</p>
</body>
</html>
';

// En-têtes de l'e-mail
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'To: '.$
      </div>
    </div>