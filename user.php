<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <p>
            <?php
            if (!empty($_GET['firstname']) &&  !empty($_GET['lastname'])){
                echo $_GET['firstname'] ."  ". $_GET['lastname'];
            } else {
                echo 'Erreur lors de la saisie';
            }
            ?>
        </p>
    </body>
</html>
