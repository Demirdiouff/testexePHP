<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';


                                                    // ---------------- Conditions ------------------- //
//    Rappel des symboles et des significations : 
//       == est égal à 
//       > est supérieur à 
//       < est inférieur à
//       >= est supérieur ou égal à
//       <= est inférieur ou égal à
//       != est différent de 
echo '<h2>Conditions : (if, else, elseif)</h2><br>';

echo "L'age est de 25. <br><br>";
$age = 25;
if ($age > 18) {
    echo 'Salut gamin !';
} elseif ($age == 18) {
    echo 'Bienvenue à la majorité ! Youhou !';
} else {
    echo 'Salut jeune homme !';
}

echo '<br><br><br>';


echo '<h2>Conditions avec bool : (true/false) </h2><br>';
$adulte = true; 
if ($adulte) {
    echo 'Bonjour Mr.Adulte';
} else {
    echo 'Interdiction d\'entrer ici'; 
}

// La condition du haut commence par "Si, c'est un adulte", alors on affiche "Bonjour Mr.Adulte"
echo "<br><br>";
// La condition du bas commence par "Si, ce n'est pas un adulte", alors on affiche "Interdiction d'entrer ici"

$adulte = true;
if (!$adulte) {
    echo 'Interdiction d\'entrer ici';
} else {
    echo 'Bonjour Mr.Adulte';
}

echo '<br><br><br>';


echo '<h2>Conditions avec bool : (true/false) - (conditions multiples) </h2><br>';
// La condition a choix multiple plus bas peut également s'appliquer en plus de AND (&& et) avec OR (|| ou)
$adulte = true;
$nom = "Deger"; 

if ($adulte AND $nom == "Deger")
{
    echo 'Salut Deger !';
} else {
    echo 'T\'es qui...?';
}

// On peut également faire afficher de l'HTML entre deux conditions, en fermant la balise PHP et la réouvrir ensuite : 
$adulte = true;
if ($adulte) 
{
?>
	<p>Tu es un adulte écris en HTML.</p>
<?php 
}

// On peut appliquer la condition "switch" qui s'écrit de façon suivante (plus facile) :
// On peut mettre autant de case qu'on souhaite, bien finir par un break
// Bien penser à mettre une cas default, qui signifie faire quand même quelque chose même quand on rentre dans aucun des cas 
$age = 99;

switch ($age)
{
    case 4: 
        echo 'Tu as 4 ans';
        break;
    case 8:
        echo 'Tu as 8 ans maintenant';
        break;
    case 12:
        echo 'Wouhou tu as 12 ans !';
        break;
    case 18: 
        echo 'Félicitations t\'es majeur !';
        break;
        
    default:
        echo 'Eh ben... je ne sais pas quoi en penser...';
}
