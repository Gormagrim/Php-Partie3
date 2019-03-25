<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 5 Partie 3 php</title>
</head>
<body>
  <!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->
  <?php
    for ($number=1; $number <= 15 ; $number++) { ?>
    <p class="number"><?= $number ?> On y arrive presque !</p>
    <?php
    }
   ?>
</body>
</html>
