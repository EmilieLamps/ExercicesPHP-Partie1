<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-Ya0fS7U2c07GI3XufLEwSQlqhpN0ri7w/ujyveyqoxTJ2rFHJcT6SUhwhL7GM4h9" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 3 - Partie 1</title>
</head>
<header>
  <h1 class="text-center text-white pb-5">Exercices PHP</h1>
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#">PARTIE 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex1.info/index.php">Exercice 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex2.info/index.php">Exercice 2</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://phppartie1ex3.info/index.php">Exercice 3
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex4.info/index.php">Exercice 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex5.info/index.php">Exercice 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex6.info/index.php">Exercice 6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex7.info/index.php">Exercice 7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://phppartie1ex8.info/index.php">Exercice 8</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</header>
<body>
  <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 3</h2>
  <h3 class="text-center pb-5">Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu.</h3>
  <?php
    $km = 1;
    echo $km;
    echo '<br/>'; // Permet d'aller à la ligne
    $result = $km + "2";
    echo $result;
    echo '<br/>';
    $result2 = ($result * 40) + 5;
    echo $result2;
   ?>
  <script type="text/javascript" src="assets/js/script.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
