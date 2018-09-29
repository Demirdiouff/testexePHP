<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';



                                                    // ---------------- Fonctions ------------------- //
// Il existe différentes fonctions en PHP, il y en a de base, ou on peut en créer nous même.
$phrase = 'Bonjour, ceci est un morceau de texte pour compter le nombre de lettres dedans.';
$nombreDeCaractères = strlen($phrase);  // la fonction "strlen" de PHP permet de compter le nombre de caractères dans la variable

echo 'Il y a exactement ' . $nombreDeCaractères . ' dans cette phrase.';


                    echo '<br>' . '<br>' . '<br>';


$phrase = 'Bonjour, ceci est un morceau de texte pour compter le nombre de lettres dedans.';
$nombreDeCaractères = str_shuffle($phrase); // la fonction "strshuffle" de PHP permet de mélanger les caractères contenu dans la variable

echo $nombreDeCaractères;


                    echo '<br>' . '<br>' . '<br>';


// On peut également faire afficher directement la fonction via un echo, sans passer par une variable intermédiaire :
$phrase = 'Bonjour, ceci est un morceau de texte pour compter le nombre de lettres dedans.';
echo str_shuffle($phrase);


                    echo '<br>' . '<br>' . '<br>';
                    

// On peut même faire sans aucune variable : (correction reussir à y faire afficher les accents !)
echo str_shuffle('Ma phrase ici présente sera mélangée');


                    echo '<br>' . '<br>' . '<br>';
                    
                    
// Fonction date : permet de retourner le numero du mois, du jour, les minutes, les secondes... 
echo date ('d'); // demande le numero du jour
echo '<br>' . '<br>';
echo date ('m'); // demande le numero du mois etc...


                    echo '<br>' . '<br>' . '<br>';


// On peut également créer une fonction nous même ET les afficher derrière sans echo
function direBonjour($nom)
{
    echo '<p>Bonjour ' . $nom . '</p>';
}

direBonjour('Marie');
direBonjour('Michel');