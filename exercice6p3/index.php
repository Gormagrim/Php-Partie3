<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 6 Partie 3 php</title>
</head>
<body>
  <?php
  /* En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. */
  for ($number = 20; $number >= 0; $number --)  //while peut se traduire par tant que.
  {?>
    <p class="number"><?= $number ?> C'est presque bon.</p>
    <?php
  }
  ?>
</body>
</html>
