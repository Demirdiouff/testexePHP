<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';

// Exercices via le site
// https://www.phpexercises.com/php-show-text-browser.html
// Faire pleins d'exercices pour devenir meilleur en PHP
// C'est parti !


// ------------------------------------------------------------------ 1) If-Else Statements, GO ! ------------------------------------------------------------------- //


// Ici on créé une structure if else pour savoir si c'est le mois d'aout ou non : 
// Si c'est le mois d'aout alors on affiche un msg spécifique, 
// Si ce n'est pas le cas on affiche un autre msg 

// possible d'améliorer le code en utilisant une fonction date en PHP mis en commentaire.

$month = "August"; // date('F', time());

if ($month == "August") {
    echo "<p>It's August, so it's really hot</p>";
} else {
    echo "<p>Not August, so at least not in the peak of the heat</p>";
}

echo "<br>";
echo "Actual month : " . $month;

?>


<br><br><br><hr><br><br>



<?php 
// -------------------------------------------------------- 2) Simple "Loops" (while, do while, for), GO ! ---------------------------------------------------------- //

// Ici pour le while, on initialise tout d'abord une variable, on y stocke un int :
// pour cette variable, on définit une condition, qui ici est d'être inférieur a 9 
// pour cette condition on effectue un affichage, qui est le "abc", et la dernière ligne permet d'incrémenter à chaque affichage d'augmenter de 1 la valeur de "$counter"
$counter = 1;
while ($counter < 9){
    echo 'abc ';
    $counter++;
}

echo '<p></p>';

// Ici, même principe que le while plus haut, sauf que le "do" fait office d'incrementeur :
// on initialise tout d'abord la variable toujours
// on précise ce que l'on veut afficher pendant le "do"
// on incrémente a l'intérieur de "do"
// et le "while" vient rajouter la condition, qui est tant que "$counter" est en dessous de 9
$counter = 1;
do{
    echo 'xyz ';
    $counter++;
} while ($counter < 9);

echo '<p></p>';

// Ici, la boucle "for" définit un point A a un point B
// On prend une condition, qui est de entre tel et tel valeur
// On effectue l'affichage de "$x" pour le compteur compris entre 1 et 10 (sachant que ça commence à 0 donc d'où la valeur 10)
for ($x=1; $x<10; $x++){
    echo "$x ";
}

// Ici on va générer une liste ordonnée via une boucle for d'un nombre défini dans la boucle
// On va effectuer l'affichage dans l'echo qui va répéter jusqu'a ce qu'il atteigne la condition souhaitée 
// la liste ordonnée est effectuée grace a "<ol>" qui débute avant la boucle for
// à l'intérieur de la boucle on prend la valeur de $x pour changer le nombre de l'item souhaité à chaque itération vu que c'est cette variable qui s'incremente

echo "<ol>";
for ($x=1; $x<6; $x++){
    echo "<li>Item $x :</li>"; 
}
echo "</ol>";

?>


<br><br><br><hr><br><br>



<?php 
// -------------------------------------------------------- 3) Simple "For" Loop (for), GO ! ---------------------------------------------------------- //

// Ici on génère la table de multiplication des chiffres 1x1, 2x2, 3x3 etc... jusqu'à 12, qui est la limite de la condition (il affiche 11 en dernier parce que le compteur commence a 0)
// la variable "$result" stocke les resultats des multiplications

for ($x=1; $x<12; $x++){
    $result = $x * $x;
    echo '"' . "$x x $x = $result" . '"' . "<br>";
}

?>


<br><br><br><hr><br><br>



<?php 
// -------------------------------------------------------- 4) Nested "for" loops, GO ! ---------------------------------------------------------- //

// Ici on va faire afficher la table de multiplication dans un tableau, à chaque fois pour 1 allant a 7 
// ex : 1x1, 1x2, 1x3 ... etc jusqu'à 1x7
// et on repète la même opération ainsi de suite 2x1, 2x2, ... jusqu'à la table des 7

// cet exercice nécessite l'utilisation de deux boucles for l'une a l'intérieur de l'autre
// pour effectuer l'affichage en tableau, il faut declarer la table en HTML avant les deux boucles, et la fermer à la fin des deux boucles
// les lignes de tableau seront a spécifier dans les echo via les "<tr>"

// pour les style pour inclure dans du PHP il faut bien penser à utiliser "\" au début du style, et la fermer à la fin,
// tout ce qui se passera à l'intérieur d'un point de vue CSS restera pareil 

echo "<table style=\"border-collapse: collapse; border: 1px solid black; background-color: yellow;\">";

for ($x=1; $x<8; $x++){
    echo "<tr>";
    for ($z=1; $z<8; $z++){
        $result = $x * $z;
        echo "<td style=\"width: 2em; border: 1px solid black; text-align: center; background-color: yellow;\"> $result </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>