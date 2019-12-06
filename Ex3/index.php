<?php
$page = 'Exercice 3';
include '../header.php';
$km = 1;
?>
<p>Valeur initiale de la variable kilomètre : <?= $km ?></p>
<?php
$km = 3;
?>
<p>Première modification de la valeur de la variable kilomètre : <?= $km ?></p>
<?php
$km = 125;
?>
<p>Dernière modification de la valeur de la variable kilomètre : <?= $km ?></p>
<?php include '../footer.php'; ?>
