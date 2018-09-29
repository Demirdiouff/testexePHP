<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo "<h3>Les erreurs les plus courantes : </h3>";

echo '<strong>Parse error =</strong><br> Une instruction PHP mal formée. Il peut y avoir plusieurs causes : <br>';
echo '    - Oubli de point-virgule <br>';
echo '    - Oubli de guillemets <br>';
echo '    - Mauvaise concaténation <br>';
echo '    - Accolade mal fermée <br>';


        echo '<br><br>';

        
echo '<strong>Indefined function =</strong><br>';
echo '- Soit la fonction n\'existe vraiment pas <br>';
echo '- Soit la fonction existe vraiment mais PHP ne la reconnaît pas : possible que ce soit une extension de PHP non activée <br>';


        echo '<br><br>';

        
echo '<strong>Wrong parameter count =</strong><br>';
echo '- Cela signifie qu\'il y a soit des oubli de paramètres dans la fonction, soit trop mis <br>';


        echo '<br><br>';
        

echo '<strong>Headers already sent by ... =</strong><br>';
echo '- Ce qu\'il faut retenir c\'est qu\'il ne faut pas mettre de code HTML avant les session_start() et setCookie() sinon cela provoquera cette erreur<br>';


        echo '<br><br>';
        
        
echo '<strong>L\'image contient des erreurs ... =</strong><br>';
echo '- Pour la corriger il faut faire apparaître l\'erreur donc soit supprimer la ligne : <?php header ("Content-type: image/png"); ?><br>';
echo '- Soit faire afficher le code source de l\'image comme si je voulais regarder la source HTML sauf que la il s\'agira de l\'image<br>';
echo '- C\'est le navigateur et non PHP qui renvoi ce message d\'erreur<br>';


        echo '<br><br>';
        
        
echo '<strong>Maximum execution time exceeded =</strong><br>';
echo '- Genre d\'erreur qui arrive le plus souvent à cause d\'une boucle infinie';