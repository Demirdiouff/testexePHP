<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';

// Exercices via le site
// https://www.phpexercises.com/php-show-text-browser.html
// Faire pleins d'exercices pour devenir meilleur en PHP
// C'est parti !


// ------------------------------------------------------------------------ 1) Simple Array, GO ! ------------------------------------------------------------------- //

// Dans cet exercice, on manipule des tableaux, pour pouvoir effectuer un affichage selon ce qu'ils contiennent;
// les éléments sont stockés dans un array, qui est contenu dans une variable
// le but est d'ici de faire afficher une phrase qui contient différents éléments de l'array avec un echo
?>

<?php 
$weather = array('rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'); 

echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few clouds and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ".</p>";
 
?>



<br><br><br><hr><br><br>



<?php 
// ------------------------------------------------------------------------ 2) Simple Array Loop, GO ! ------------------------------------------------------------------- //

// Dans cet exercice on va stocker différentes villes dans un tableau qui lui même sera dans une variable
// On trie le tableau grâce a la fonction "sort"
// Ce tableau, on va l'afficher un par ligne, grâce a un foreach
// Ensuite, on souhaite rajouter 4 villes supplémentaires, par rapport au dernier affichage, 
// On va ensuite retrier le tableau, pour obtenir un affichage ordonné en HTML


// On initialise le tableau 
$cities = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

// Affichage classique, juste espacé d'une virgule
foreach ($cities as $city) {
    echo $city . ", " ;
}

// On trie le tableau
sort($cities);

// Affichage du tableau sous forme ordonné en HTML, bien penser à ouvrir et fermer les balises
// <ol></ol> est pour l'affichage d'une liste numérotée
echo "<ol>";
foreach ($cities as $city) {
    echo "<li>" . $city . "</li>";
}
echo "</ol>";

// Rajout de 4 éléments dans le tableau, ici on note bien qu'on utilise la fonction array_push pour rajouter des éléments, et cette fois ci on spécifie a l'intérieur du tableau dans quel array
// on se trouve, ici notamment c'est "$cities"
array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');

// On retrie le tableau selon les 4 éléments qui ont été rajoutés
// Et on réeffectue l'affichage du tableau ordonné cette fois ci 
// <ul></ul> est pour l'affichage d'une liste pucée 
sort($cities);
echo "<ul>";
foreach ($cities as $city) {
    echo "<br> - " . $city . ",";
}
echo "</ul>";

?>



<br><br><br><hr><br><br>




<?php 
// ------------------------------------------------------------------------ 3) Arrays from User Input, GO ! ------------------------------------------------------------------- //

// Dans cet exercice on va créer un formulaire, dans lequel le visiteur rentrera des informations sur son expérience 
// On va créer un champ ville : mois : et année 
// En dessous de ces champs, il y aura des checkbox avec les temps weather qu'on a déjà listé plus haut dans le précedent exercice

// si le formulaire ne dispose d'aucune donnée, alors on affiche le formulaire
// si le formulaire contient des données, le formulaire disparait
if (!isset($_POST['submit'])){

?>

<form method="post">
	<input type="text" name="city" placeholder="Ville : ">
	<input type="text" name="month" placeholder="Mois : ">
	<input type="text" name="year" placeholder="Annee : ">
	
	<br><br>
	
	<input type="checkbox" name="weather[]" value="rain" checked="checked">Rain
  	<input type="checkbox" name="weather[]" value="sunshine">Sunshine
  	<input type="checkbox" name="weather[]" value="clouds">Clouds
  	<input type="checkbox" name="weather[]" value="hail">Hail
  	<input type="checkbox" name="weather[]" value="sleet">Sleet
  	<input type="checkbox" name="weather[]" value="snow">Snow
  	<input type="checkbox" name="weather[]" value="wind">Wind
  	
  	<br><br>
  	
  	<input type="submit" name="submit" value="Enregistrer">
</form>

<?php } else { ?>

<?php

// ici on procède pour mettre les résultats du formulaire dans un array
$inputUserArray = array(
    $city = $_POST['city'], // ici c'est la valeur 0
    $month = $_POST['month'], // ici c'est la valeur 1
    $year = $_POST['year'] // ici c'est la valeur 2
    );

echo "In $inputUserArray[0] in the month of $inputUserArray[1] $inputUserArray[2], you observed the following weather: <br> <ul>";

// On enregistre les informations weather dans une variable
$weather = $_POST['weather'];

// Maintenant on effectue un foreach pour parcourir les choix du visiteur pour la météo
// l'affichage s'effectue dans une liste a puces
foreach ($weather as $w) {
    echo "<li> $w </li>";
    }
    echo "</ul>";
}
?>

<form method="post">
<input type="submit" value="reset">
</form>




<br><br><br><hr><br><br>




<?php 
// ------------------------------------------------------------------------ 4) Add User Input to Array, GO ! ------------------------------------------------------------------- //

// Dans cet exercice on va créer un tableau array avec plusieurs mode de transports a l'intérieur 
// Avec un echo qui sera affiché : "Travel takes many forms, whether across town, across the country," 
// "or around the world. Here is a list of some common modes of transportation:"
// En dessous de cet echo on affiche la liste non ordonné <ul></ul> des moyens de transports créée a l'intérieur de l'array
// Une fois qu'on a effectué l'affichage, on met a jour le tableau, et on affiche le tableau à jour,
// avec la possibilité au visiteur de rajouter encore une fois un moyen de transport si il le souhaite, autant qu'il veut


// On initialise l'array dans une variable ainsi que la phrase
// $phrase = "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation : <br>";
// $transports = array('Automobile', 'Jet', 'Ferry', 'Subway');

// // implode permet de faire afficher sous forme de string ce qui est contenu dans un array
// // array_pop permet d'enlever le dernier element d'un type array 
// $lastToPop = array_pop($transports);

// echo "<br>";

// $phrase .= join(', ', $transports) . ", $lastToPop.<br>";
// echo $phrase;

if (!isset($_POST['submit'])){

$transport = array('Automobile', 'Jet', 'Ferry', 'Subway');

}
?>

<p> Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation: </p>

<?php
echo "<ul>";
foreach ($transport as $t) {
    echo "<li> $t </li>";
}
echo "</ul>";
?>

<form method="post">
	<p>Merci d'ajouter votre moyen de transport préféré, vous pouvez en ajouter plusieurs en les séparant par une virgule :
	<input type="text" name="ajoutTransport" value="<?php ?>">
</form>