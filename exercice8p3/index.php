<?php
  $number = 200;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 7 Partie 3 php</title>
 </head>
 <body>
<?php
/* En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. */
while ($number >= 0)  //while peut se traduire par tant que.
{?>
<p><?php  echo $number ?> Enfin !!!!</p>
<?php
  $number = $number - 12 ;
}
?>
</body>
</html>
