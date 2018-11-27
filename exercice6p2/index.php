<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <p>Traduire ce code avec des if et des else :
            <?php
            echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
            ?>
        </p>
        <?php
       $age = 12;
          if($age >= 18){
              echo 'Tu es majeur';
          }else{
             echo 'Tu n\'es pas majeur'; 
          }
        ?>
    </body>
</html>

