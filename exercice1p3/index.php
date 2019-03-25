<?php

$patternName = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
$lastName = htmlspecialchars($_POST['lastName']);
$firstName = htmlspecialchars($_POST['firstName']);

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 partie 7 php</title>
    </head>
    <body>
        <p>Créer un formulaire sur la page index.php avec :</p>
        <ul>
            <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
            <li>Un champ texte pour le nom</li>
            <li>Un champ texte pour le prénom</li>
        </ul>
        <p>Ce formulaire doit rediriger vers la page index.php.</p>
        <p>Vous avez le choix de la méthode.</p>
        <form action="index.php" method="post">
            <label for="lastName"> Votre nom : </label><input type="text" name="lastName"/>
            <label for="firstName"> Votre prénom : </label><input type="text" name="firstName"/>
            <input type="submit" value="Envoyer" />
        </form>
        <?php
         if (isset($_GET['submit'])) {
        $patternName = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
        $lastName = htmlspecialchars($_POST['lastName']);
        $firstName = htmlspecialchars($_POST['firstName']);

        /* isset on verifie si ça existe  */
        if (isset($lastName)) {
            /* empty on verifie si l'imput est vide */
            if (empty($lastName)) {
                ?>
                <p>Nom : champ obligatoire</p>
                <?php
            } else {
                /* Si il est rempli alors on verifie la pattern  avec preg_match */
                if (preg_match($patternName, $lastName)) {
                    ?>
                    <p>Nom : <?= $lastName ?> </p>
                <?php } else { ?>
                    <p>Merci d'entrer un Nom correct <p>
                        <?php
                    }
                }
            }
            if (isset($firstName)) {
                if (empty($firstName)) {
                    ?>
                <p>Prénom : champ obligatoire</p>
                <?php
            } else {
             if (preg_match($patternName, $firstName)) {
                    ?>
                    <p>Prénom : <?= $firstName ?></p>
                <?php } else { ?>
                    <p>Merci d'entrer un Prénom correct<p>
                        <?php
                    }
                }
            }
          }
            ?>
    </body>
</html>
