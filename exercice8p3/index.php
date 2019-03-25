<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 7 Partie 3 php</title>
</head>
<body>
  <?php
  /* En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. */
  for ($number = 200; $number >= 0; $number -= 12)  //while peut se traduire par tant que.
  {?>
    <p><?= $number ?> Enfin !!!!</p>
    <?php
  }
  ?>
</body>
</html>
