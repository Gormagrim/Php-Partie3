<<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 7 Partie 3 php</title>
</head>
<body>
  <?php
  /* En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. */
  for ($number = 1; $number <= 100; $number += 15)  //while peut se traduire par tant que.
  {?>
    <p class="number"><?= $number ?> On tient le bon bout.</p>
    <?php
  }
  ?>
</body>
</html>
