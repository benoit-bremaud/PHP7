<?php
include("tete.inc.php"); // Lors de son interpretation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre
echo "<hr/>";
include_once("corps.inc.php"); // fonction qui ne sera executée qu'une seule fois, même si elle figure dans une boucle
require("corps.html"); // COmportement identique à "include" sauf quand cas d'erreur "require" provoque une erreur fatale et met fin au script
require_once("pied.inc.php"); // idem que "include_once"
?>