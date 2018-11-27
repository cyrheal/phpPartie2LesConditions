<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <p>Traduire ce code avec des if et des else :
            <?php
            echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
            ?>
        </p>
        <?php
       $isOk = false;
       if($isOk == false){
           echo 'c\'est pas bon !!!';
       } else{
           echo 'c\'est ok !!';
       }
        ?>
    </body>
</html>
