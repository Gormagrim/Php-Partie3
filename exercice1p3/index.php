<?php
  $number = 0;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 1 Partie 3 php</title>
 </head>
 <body>
<?php
/* Créer une variable et l'initialiser à 0.
     Tant que cette variable n'atteint pas 10, il faut :
     l'afficher
     l'incrementer */
while ($number <= 10)  //while peut se traduire par tant que.
{?>
  <p><?php echo $number++ ?></p>
<?php
}
?>
</body>
</html>
