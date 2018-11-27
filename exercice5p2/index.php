<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <p>Traduire ce code avec des if et des else :
            <?php
            echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
            ?>
        </p>
        <?php
        $gender = 'femme';
       if($gender === 'femme'){
           echo 'C\'est une développeuse !!!';
       }else{
           echo 'C\'est un développeur !!!';
       }
        ?>
    </body>
</html>
