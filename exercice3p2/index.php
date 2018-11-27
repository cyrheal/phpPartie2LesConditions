<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :
            Homme
            Femme
            En fonction de l'âge et du genre afficher la phrase correspondante :
            Vous êtes un homme et vous êtes majeur
            Vous êtes un homme et vous êtes mineur
            Vous êtes une femme et vous êtes majeur
            Vous êtes une femme et vous êtes mineur
            Gérer tous les cas.</p>
        <?php
        $age = 32;
        $gender = 'homme';
        if ($age > 0 && ($gender == 'homme' || $gender == 'femme')) {
            if ($gender == 'femme' && $age >= 18) {
                echo 'Vous êtes une femme et vous êtes majeur.';
            } else if ($gender == 'femme' && $age < 18) {
                echo 'Vous êtes une femme et vous êtes mineur.';
            } else if ($gender == 'homme' && $age >= 18) {
                echo 'Vous êtes une homme et vous êtes majeur.';
            } else {
                echo 'Vous êtes une homme et vous êtes mineur.';
            }
        } else {
            echo 'Merci d\'entrer les bonnes informations';
        }
        ?>
    </body>
</html>
