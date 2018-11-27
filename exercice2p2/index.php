<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
            Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
            Bonus : L'écrire de deux manières différentes.</p>
        <?php
        $isEasy = true;
        if ($isEasy == true){
            echo 'C\'est facile!!';
        } else {
            echo 'C\'est difficile !!!';
        }
        ?>
         <?php
        $isEasy = 1;
        if ($isEasy == 1){
            echo 'C\'est facile!!';
        } else {
            echo 'C\'est difficile !!!';
        }
        ?>
    </body>
</html>