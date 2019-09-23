<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $titulo; ?></title>
    </head>
    <body>
        <form method="POST" action="familia.php">
            <?php
            
            $texto = "Stark#Bran, Arya, Tony#Wolf";
            $texto = explode("#", $texto);
            $nomes = array("family"=>$texto[0], "names"=>$texto[1], "pet"=>$texto[2]);
            
            ?>
        </form>
    </body>
</html>