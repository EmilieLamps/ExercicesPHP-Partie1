<?php
$page = "Exercice 8"; // Définir la variable pour changer le titre !
$addition = 3 + 4;
$multiplication = 5 * 20;
$division = 45 / 5;
$firstResult = $addition;
$secondResult = $multiplication;
$thirdResult = $division;
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 8</h2>
 <h3 class="text-center pb-5">Créer 3 variables.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 5 * 20.
Dans la troisième mettre le résultat de l'opération 45 / 5.
Afficher le contenu des variables.</h3>
<p>Le résultat de l'addition est <?= $addition ?></p>
<p>Le résultat de la multiplication est <?= $multiplication ?></p>
<p>Le résultat de la division est <?= $division ?></p>
<?php
include '../footer.php';
?>
