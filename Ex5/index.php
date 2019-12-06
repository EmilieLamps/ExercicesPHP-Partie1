<?php
$page = 'Exercice 5';
$varInt = NULL;
include '../header.php';
?>
  <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 5</h2>
  <h3 class="text-center pb-5">Créer une variable de type int. L'initialiser avec rien.  Afficher sa valeur.
Donner une valeur à cette variable et l'afficher.</h3>
<p>J'ai la valeur<?= $varInt?></p>
<?php
$varInt = 10;
 ?>
<p>Maintenant j'ai la valeur <?= $varInt?></p>
<?php include '../footer.php'; ?>
