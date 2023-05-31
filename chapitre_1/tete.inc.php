<!DOCTYPE html>
<?php
    $variable1=" PHP 7";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo "<title>Une page pleine d'inclusions $variable1</title>";
    ?>
</head>
<body>
    <?php
        $variableext="Ce texte provient du fichier inclus";
        echo "<div><h1 style=\"border-width:5;border-style:double;background-color:#ffcc99;\">
        Bienvenu sur le site $variable1 </h1>";
        echo "<h3>$variableext</h3>";
        echo "Nom du fichier ex&#233;cut&#233;: ", $_SERVER['PHP_SELF'],"&nbsp;&nbsp;&nbsp;";
        echo "  Nom du fichier inclus : " , __FILE__ ,"</div>";
    ?>