<?php
  $numberOne = 100;
  $numberTwo = 27;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 3 Partie 3 php</title>
 </head>
 <body>
<?php
/* Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :
multiplier la première variable avec la deuxième
afficher le résultat
décrémenter la première variable */
while ($numberOne >= 10)  //while peut se traduire par tant que.
{?>
  <p><?php echo 'Quand je multiplie ma variable ' . $numberOne . ' par ma variable ' . $numberTwo . ', j\'obtiens : ' . $numberOne * $numberTwo ?></p>
<?php
  $numberOne-- ; //je lance un echo pour incrémanter ma variable.
}
?>
</body>
</html>
