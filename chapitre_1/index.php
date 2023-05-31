<!DOCTYPE html>
<!-- script php -->
<?php
    $variable1=" PHP 7";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "<title>Une page pleine de scripts</title>";
    ?>
    <!-- <title>Titre de la page</title> -->
</head>
<body>
    <!-- script php obsolète et plus reconnue par php 7 -->
    <script language="php">
        echo"<h1>BONJOUR A TOUS</h1>";
    </script>

    <!-- script php -->
    <?php
    echo "<h2>Titre écrit par PHP";
    $variable2=" MySQL";
    ?>
    <p>Vous allez découvrir <?= $variable1 ?></p> <!-- script à l'interieur de balises html forme obsolète -->

    <!-- script php -->
    <?php
        echo "<h2>Bonjour de $variable1</h2>";
    ?>
    <!-- script à l'intérieur de balises html (variante) -->
    <p>Utilisation de variables PHP<br/>Vous allez découvrir également
        <?php
            echo $variable2
        ?>
    </p>

    <!-- script php devenue obsolète -->
    <?= "<div><big>Bonjour de $variable2 </big></div>" ?>
</body>
</html>