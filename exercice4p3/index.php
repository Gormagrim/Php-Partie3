<?php $number = 1; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 4 Partie 3 php</title>
</head>
<body>
  <?php
  /* Créer une variable et l'initialiser à 1.
  Tant que cette variable n'atteint pas 10, il faut :
  l'afficher
  l'incrementer de la moitié de sa valeur */
  //while peut se traduire par tant que.
  while ($number <= 10) {?>
    <p class="number"><?= $number ?></p>
    <?php
    $number += $number/2 ; //je dis à ma variable qu'elle devient égale a sa valeur + la moitié de sa valeur
  }
  ?>
  <p>Seconde possibilité</p>
  <?php for ($number = 1; $number <= 10 ; $number += $number/2) { ?>
    <p class="number"><?= $number ?></p>
  <?php } ?>
</body>
</html>
