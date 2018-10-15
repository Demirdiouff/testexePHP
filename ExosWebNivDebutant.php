<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';

// Exercices via le site 
// https://www.phpexercises.com/php-show-text-browser.html
// Faire pleins d'exercices pour devenir meilleur en PHP
// C'est parti !


// ---------------------------------- 1) Créer une page PHP, avec des standards HTML et afficher un "Hello World" en PHP, GO ! --------------------------------------- //

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php echo "Hello World ! <br> Bienvenue dans cette page d'entrainement de code PHP pour devenir le meilleur codeur de tous les temps !" ?>
</body>
</html>


<br><br><br><hr><br><br>



<?php 
// ------------------------------------- 2) Toujours pareil, mais effectuer d'abord un affichage classique, puis avec 2 variables en les combinant, GO ! ------------------------- //

// Ecriture classique avec un echo sans stockage variables
echo "Twinkle, Twinkle little star.";

// Saut de ligne
echo "<br><br>";

// Initialisation variables, pour préciser ce qu'elles contiennent, ici notamment ce sont des strings
$premVar = "Twinkle, ";
$deuzVar = "Twinkle little star.";

echo "<br><br>";

// Retranscription via l'ecriture via les variables 
echo $premVar, $deuzVar;

?>


<br><br><br><hr><br><br>




<?php 
// ------------------------------------------------ 3) Arithmetique, operateurs et variables, calculs entre eux, GO ! --------------------------------------------------------- //


// Initialisation variables 
$x = 10;
$y = 7;


// Calculs entre variables 
echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";
echo $x % $y . "<br>";

echo "<br>";

// Affichage des opérations plus détaillé 
$result = $x + $y;
echo "$x + $y = $result <br>";

$result = $x - $y;
echo "$x - $y = $result <br>";

$result = $x * $y; 
echo "$x * $y = $result <br>";

$result = $x / $y;
echo "$x / $y = $result <br>";

$result = $x % $y; 
echo "$x % $y = $result <br>";

?>


<br><br><br><hr><br><br>



<?php 

// ----------------------------------------------------- 4) Assignement arithmetique, operateurs et variables, modification valeurs variables, GO ! --------------------------------------------------------- //

// Premiere partie en commentaire non fonctionnel à cause d'une erreur que je ne comprends pas : 
// $variable = 8;

// Problème en dessous que je n'arrive pas à comprendre à voir plus en détail : "Notice: A non well formed numeric value encountered"
// echo "Value is now $variable. <br>";
// echo "Add 2. Value is now " . $variable = $variable + 2 . ". <br>";
// echo "Substract 4. Value is now " . $variable = $variable - 4 . "."; 

// echo "<br><br><br>";


// Ici, en dessous, on change la valeur $num à chaque fois en y ajoutant une opération.
$num = 8;
echo "Value is now $num. <br>";
$num += 2;
echo "Add 2. Value is now $num. <br>";
$num -= 4;
echo "Substract 4. Value is now $num. <br>";
$num *= 5;
echo "Multiply by 5. Value is now $num. <br>";
$num /= 3;
echo "Divide by 3. Value is now $num. <br>";
$num ++;
echo "Increment value by one. Value is now $num. <br>";
$num --;
echo "Decrement value by one. Value is now $num. <br>";

?>


<br><br><br><hr><br><br>



<?php 

// -------------------------------------------------------------------- 5) Contenu variable et destruction, GO ! --------------------------------------------------------- //

// déclaration des variables
$name = 'Harry';
$age = 28;

// var_dump donne le contenu exact et ce qu'il contient et comment il le contient
var_dump($name); 
echo "<br>";
// print_r permet d'afficher le contenu 
print_r($name);
echo "<br>";
var_dump($age);

// ici la modification de la variable pour la mettre "null" aurait aussi pu s'écrire unset($name);
// le message d'erreur qui s'affiche car il considère désormais que la variable $name n'existe plus, donc il ne la trouve pas
$name = null;   // ou 'unset($name);'
echo "<br>";
var_dump($name);

?>


<br><br><br><hr><br><br>




<?php 
// -------------------------------------------------------------------- 6) Concaténation de Strings, GO ! -------------------------------------------------------------------- //

// Utilisation des concaténation en PHP
// les guillemets simples et doubles n'agissent pas de la même manière
$around = "around";

echo "<p> What goes $around comes $around <p>";
echo '<p> What goes ' . $around . ' comes ' . $around . '<p>';

?>


<br><br><br><hr><br><br>



<?php 
// -------------------------------------------------------------------------- 7) Variable Type Data, GO ! -------------------------------------------------------------------- //

// Une variable définie 
// Qui va être modifiée et être testée pour chacune de sa valeur à savoir à quelle type elle correspond à chaque itération
// On a donc créé une boucle qui regarde dans un tableau pour chaque itération, avec la fonction gettype, savoir ce à quoi correspond 
// chaque case du tableau et les affiche via l'echo 

$whatsit = array("Hi", 1.2, true, 5, null);

foreach ($whatsit as $value) {
    echo "Value is " . gettype($value), "<br>";
}

?>


<br><br><br><hr><br><br>

