
  <?php
  $page = "Exercice 6";
  $name = 'Emilie';
  $message = 'Bonjour ' .$name . ' comment vas-tu ?'; //faire les espaces avant ou après la chaine de caractères
  include '../header.php';
   ?>
   <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 6</h2>
   <h3 class="text-center pb-5">Créer une variable name et l'initialiser avec la valeur de votre choix.
     Afficher : "Bonjour" + name + ", comment vas tu ?".</h3>
<?php
  echo  $message; //Pas de = entre echo et la requête !
  include '../footer.php';
 ?>
