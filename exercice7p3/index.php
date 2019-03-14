<?php
  $number = 1;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 7 Partie 3 php</title>
 </head>
 <body>
<?php
/* En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. */
while ($number <= 100)  //while peut se traduire par tant que.
{?>
<p><?php  echo $number ?> On tient le bon bout.</p>
<?php
  $number = $number + 15 ;
}
?>
</body>
</html>
