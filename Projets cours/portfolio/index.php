<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Mon Portfolio</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" media="screen" />
  <meta name="viewport" content="width=1100">
</head>

<body>
<section id="header">
  <div class="header container">
    <div class="nav-bar">
      <div class="brand">
        <a href="#home">
        <h1><span>Jo</span>shua <span>D</span>ahlke</h1>
        </a>
      </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
              <ul>
                <li><a href="#home" data-after="Home">Acceuil</a></li>
                <li><a href="#presentations" data-after="presentation">Présentation</a></li>
                <li><a href="#competences" data-after="Competences">Compétences</a></li>
                <li><a href="#formations" data-after="Formations">Formation</a></li>
                <li><a href="#about" data-after="About">A propos</a></li>
                <li><a href="#contact" data-after="Contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
</section>

  <!-- Home Section  -->
  <section id="home">
    <div class="home container">
      <div>
        <h1>Bonjour, <span></span></h1>
        <h1>Je m'appelle Joshua <span></span></h1>
        <h1>Dahlke <span></span></h1>
        <a href="#formations" type="button" class="clickable">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Home Section  -->

  <!-- Presentation Section -->
  <section id="presentations">
    <div class="presentations container">
      <div class="presentation-top">
        <h1 class="section-title">Pré<span>sen</span>tation</h1>
      </div>
        <div class="box">
          <dic class="inbox">
            <h2>Bonjour, je vous souhaite la bienvenue. Je m'appelle Joshua j'ai 18 ans et je suis en ce moment en 1ere année de BTS SIO (Services Informatiques aux Organisations). J'ai opté pour l'option SLAM (Solutions Logicielles et Applications Métiers) dans l'établissement Saint-Ursule de Caen. Mon plaisir que me procure le domaine du développement web a fait surface lors d'un stage.</h2>
          </div>
        </div>
    </div>
  </section>
  <!-- End Presentation Section -->

  <!-- Skills Section -->
<section id="competences">
  <div class="presentations container">
    <div class="presentation-top">
      <h1 class="section-title">Compé<span>ten</span>ces</h1>
      <div class="skill">
    <h1>MES COMPÉTENCES EN DÉVELOPPEMENT</h1>
    <ul>
      <li>
        <h2>HTML</h2>
        <span class="bar"><span class="html"></span></span>
      </li>
      <li>
        <h2>CSS</h2>
        <span class="bar"><span class="css"></span></span>
      </li>
      <li>
        <h2>PHP</h2>
        <span class="bar"><span class="php"></span></span>
      </li>
      <li>
        <h2>JAVASCRIPT</h2>
        <span class="bar"><span class="javascript"></span></span>
      </li>
      <li>
        <h2>FRANÇAIS</h2>
        <span class="bar"><span class="francais"></span></span>
      </li>
      <li>
        <h2>ALLEMAND</h2>
        <span class="bar"><span class="allemand"></span></span>
      </li>
      <li>
        <h2>ANGLAIS</h2>
        <span class="bar"><span class="anglais"></span></span>
      </li>
    </ul>
  </div>
    </div>
  </div>
</section>

  <!-- End Skills Section -->

  <!-- Formations Section -->
  <section id="formations">
    <div class="formations container">
      <div class="formations-header">
        <h1 class="section-title">Form<span>ation</span></h1>
      </div>
      <div class="all-formations">
        <div class="formation-item">
          <div class="formation-info">
            <h1>Lycée</h1>
            <h2>De 2019 à 2022</h2>
            <p>Lycée Saint Ouen, Pont-Audemer (Bac Générale)</p>
            <p>Spécialités: Mathématiques, SVT</p>
          </div>
          <div class="formation-img">
            <img src="./img/StOuen.JPG" alt="img"> <!-- temporaire-->
          </div>
        </div>
        <div class="formation-item">
          <div class="formation-info">
            <h1>Premier Stage</h1>
            <h2>Stage de 3ème</h2>
            <p>Stage d'une semaine en 2019.</p>
            <p>Nestlé (NDC Lisieux), développement produits laitiers international</p>
          </div>
          <div class="formation-img">
            <img src="./img/logoNestle.jpg" alt="img"><!-- temporaire-->
          </div>
        </div>
          <div class="formation-item">
            <div class="formation-info">
              <h1>Second Stage</h1>
              <h2>Hors période scolaire</h2>
              <p>Stage en Allemagne d'une semaine en 2021</p>
              <p>Unit.Cloud, Augsburg - solutions informatiques</p>
            </div>
            <div class="formation-img">
              <img src="./img/Unitcloud.JPG" alt="img"><!-- temporaire-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Formations Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/1648979254964.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">A propos de <span>moi</span></h1>
        <h2>Développeur junior</h2>
        <a href="img/CV Joshua Dahlke.pdf" class="clickable">Télécharger CV</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Info <span>contact</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="img/icons8-phone-50.png" /></div>
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
  </section>
  <!-- End Contact Section -->

  <!-- Contact Section -->
  <section id="formcontact">
    <span id="form"></span>
    <div class="formlabel">
        <h1>Me contacter !</h1>
        <form method="post" action="contacter.php" name="mailform">
            <div class="usermail">
                <p>
                    <label for="mail">Votre Mail :</label> <input type="email" name="mail" id="mail"
                        placeholder="exemple@gmail.com" required />
                </p>
            </div>
            <div class="username">
                <p>
                    <label for="nom">Votre Nom :</label> <input type="text" name="nom" id="nom" placeholder="Bob"
                        required />
                </p>
            </div>
            <div class="usermessage">
                <p>
                    <label for="message">Votre Message :</label> <textarea type="text" name="message" id="message"
                        rows="5" cols="60" required placeholder="Votre message"></textarea>
                </p>
            </div>
            <div class="input">
                <input class="send" type="submit" value="Envoyer" />
            </div>
        </form>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Jo</span>shua <span>D</span>ahlke</h1>
      </div>
      <h2>Vous pouvez me retrouver</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.linkedin.com/in/joshua-dahlke-109ab7235/?trk=public_profile_browsemap&originalSubdomain=fr"><img src="https://blog.waalaxy.com/wp-content/uploads/2021/01/LinkedIn-Symbole.png" /></a>
        </div>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>