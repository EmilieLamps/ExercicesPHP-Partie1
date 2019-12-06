<?php
$page = 'Exercice 4';
$varString = "chaine";
$varInt = 50;
$varFloat = 50.5;
$varBoolean = True;
include '../header.php';
?>
  <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 4</h2>
  <h3 class="text-center pb-5">Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
Les afficher.</h3>
  <p>Je suis une variable de type <?= $varString ?></p>
  <p>Je suis une variable de type entier et je contiens la valeur <?= $varInt ?></p>
  <p>Je suis une variable de type Float et je contiens la valeur <?= $varFloat ?></p>
  <p>Je suis une variable de type booléen et je contiens la valeur <?= $varBoolean ?></p>
<?php include '../footer.php'; ?>
