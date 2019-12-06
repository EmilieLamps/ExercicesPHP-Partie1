<?php
$page = "Exercice 7"; // Définir la variable pour changer le titre !
$lastName = 'Lamps';
$firstName = 'Emilie';
$age = 28;
include '../header.php';
 ?>
  <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 7</h2>
  <h3 class="text-center pb-5">Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</h3>

<p>Bonjour <?= .$lastName.' '.$firstName. ?> tu as <?= $age ?> ans.</p>
<?php
  include '../footer.php';
 ?>
