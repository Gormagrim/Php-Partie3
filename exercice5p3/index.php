<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 5 Partie 3 php</title>
</head>
<body>
  <?php
  /* En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. */
  while ($number <= 15)  //while peut se traduire par tant que.
  {?>
    <p class="number"><?= $number ?> On y arrive presque !</p>
    <?php
    $number ++ ; //je dis à ma variable qu'elle devient égale a sa valeur + la moitié de sa valeur
  }
  ?>
</body>
</html>
