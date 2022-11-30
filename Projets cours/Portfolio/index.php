<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Mon Portfolio</title>
  <?php include('./php/head.php') ?>
</head>

<body>
  <?php include('./php/nav.php') ?>

  <!-- Home Section  -->
  <section id="home">
  <?php include('./php/home.php') ?>
  </section>
  <!-- End Home Section  -->

  <!-- Presentation Section -->
  <section id="services">
  <?php include('./php/presentation.php') ?>
  </section>
  <!-- End Presentation Section -->

  <!-- competences Section -->
  <section id="competences">
  <?php include('./php/competences.php') ?>
  </section>
  <!-- End competences -->

  <!-- Projects Section -->
  <section id="projects">
  <?php include('./php/projets.php') ?>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
  <?php include('./php/about.php') ?>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
  <?php include('./php/contacter.php') ?>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <?php include('./php/footer.php') ?>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>