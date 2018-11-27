<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice8</title>
    </head>
    <body>
        <p>Traduire ce code avec des if et des else :
            <?php
            echo ($isOk) ? 'c\'est ok!!' : 'c\'est pas bon !!!';
            ?>
        </p>
        <?php
        $isOk = true;
        if($isOk == true){
            echo 'c\'est ok!!';
        }else{
            echo 'c\'est pas bon !!!';
        }
        ?>
    </body>
</html>
