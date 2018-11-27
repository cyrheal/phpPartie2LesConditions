<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <p>Créer une variable age et l'initialiser avec une valeur.
            Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
        <?php
        // on crée une variable name et on l'initialise avec la valeur de notre choix
        $age = 32;
        if ($age > 0) {
            if ($age >= 18) {
                echo 'Vous êtes majeur.';
            } else {
                echo 'Vous êtes mineur.';
            }
        } else {
            echo 'vous êtes pas né';
        }
        ?>
    </body>
</html>
