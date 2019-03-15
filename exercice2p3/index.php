<?php
$numberOne = 0;
$numberTwo = 27;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 1 Partie 3 php</title>
</head>
<body>
  <?php
  /* Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
  Tant que la première variable n'est pas supérieure à 20 :
  multiplier la première variable avec la deuxième
  afficher le résultat
  incrementer la première variable */
  while ($numberOne <= 20)  //while peut se traduire par tant que.
  {?>
    <p class="number">Quand je multiplie ma variable <?= $numberOne ?> par ma variable <?= $numberTwo ?>, j'obtiens <?= $numberOne * $numberTwo ?></p>
    <?php
    $numberOne++;
  }
  ?>
</body>
</html>
<!-- php index.php dans la console pour tester notre code dans le terminal. -->
