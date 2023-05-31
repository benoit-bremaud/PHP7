<hr/>
<?php
    echo "<div><h1 style=\"border-width:3;border-style:groove;background-color:#ffcc99;\">Fin de 
    la page PHP Liens utiles : <a href=\"php.net\">php.net</a> &nbsp; <a href=\"mysql.org\">mysql.org</a></h1>"; // affichage titre pied de page avec encadrement + 2 liens hypertext
    echo "Nom du fichier ex&#233;cut&#233;: ", $_SERVER['PHP_SELF'],"&nbsp;&nbsp;&nbsp;" ; // affichage du nom du fichier " &#233 = é "
    echo "Nom du fichier inclus: ", __FILE__ ,"</div>";
?>
</body>
</html>