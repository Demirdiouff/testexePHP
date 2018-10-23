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

// Si le formulaire n'a pas déjà été soumis, alors faire afficher le formulaire
if (!isset($_POST['submit'])){

// initialisation du tableau dans "$transport"
$transport = array('Automobile', 'Jet', 'Ferry', 'Subway');

?>

<p> Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation: </p>

<?php
echo "<ul>";
foreach ($transport as $t) {
    echo "<li> $t </li>";
}
echo "</ul>";
?>
<!--  création du formulaire qui contient un foreach pour naviguer dans le tableau -->
<form method="post">
	<p>Merci d'ajouter votre moyen de transport préféré, vous pouvez en ajouter plusieurs en les séparant par une virgule :
	<input type="text" name="ajoutTransport" placeholder="Transport :" value="<?php ?>">

<?php 
// Envoi du tableau array actuel sous formulaire caché 
foreach ($transport as $t) {
    echo "<input type=\"hidden\" name=\"transport[]\" value=\"$t\">";
}
?> 

<input type="submit" name="submit" value="Ajouter">
</form>

<?php 
// si le formulaire a été envoyé, alors on procède au script d'ajout
}else {
    // on stock dans $transport le POST du tableau 
$transport = ($_POST['transport']);
// on convertir ce que l'utilisateur vient de rentrer ('string') to array
$ajoutTransport = explode(',', $_POST['ajoutTransport']);

// on ajoute a l'array existant, la fonction "array_splice" efface et remplace une portion d'un tableau
// en gros cette ligne de code revient a remplacer "$transport" au début, pour ensuite recompter le tableau grâce a "count" et ensuite re-affiche le tableau avec l'ajout qu'il y a eu dans "$ajoutTransport"
// qui lui est généré grâce au "$_POST['ajoutTransport']"
array_splice($transport, count($transport), 0, $ajoutTransport);
// on aurait aussi pu ecrire "$transport=array_merge($transport, $ajoutTransport);"

// on retourne la nouvelle liste à l'utilisateur
echo "<p>Voici la nouvelle liste généré avec vos ajouts :</p><ul>";
foreach ($transport as $t) {
    echo "<li> $t </li>";
}
echo "</ul>";

?>
<p> Ajouter un moyen supplémentaire ? </p>
<form method="post">
	<input type="text" name="ajoutTransport" value="<?php ?>">
	<p />
	
<?php 

// On repète la manipulation précédente : on renvoi le tableau caché sous forme "hidden"
foreach ($transport as $t){
    echo "<input type=\"hidden\" name=\"transport[]\" value=\"$t\">";
}
?>
<input type="submit" name="submit" value="Ajouter">
</form>
<?php 
}
?>
<form method="post">
	<input type="submit" value="reset">
</form>




<br><br><br><hr><br><br>




<?php 
// ------------------------------------------------------------------------ 5) Associative Arrays, GO ! ------------------------------------------------------------------- //

// Dans cet exercice, on va reprendre la liste des villes utilisé plus haut dans l'ex 2, mais cette fois-ci on associe le nom du pays à la ville 
// on va créer un premier tableau simplement pour s'entrainer sur l'affichage tableau,
// ensuite on va prendre les élements de ce tableau pour en faire un tableau associatif, où les pays seront les clés, et les villes les valeurs. 
// Créer par la suite un formulaire avec les instructions pour permettre de choisir une ville : 
// La selection pour le visiteur doit reprendre les 10 villes, quand le visiteur cliquera sur "submit", il y aura un echo de l'ordre : 
// "$city is in $country" où $city sera la ville choisie sur la liste formulaire et où $country sera la clé dans le tableau

// initialisation du tableau associatif
$world = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypte" => "Cairo",
    "England" => "London",
);

// Si le formulaire n'est pas soumis, alors on l'affiche 
if (!isset($_POST['submit'])) {
?>

<form method="post">
	<p>Choisissez votre pays :</p>
	<select name="city">
	
	<?php 
	foreach ($world as $w) {
	    echo "<option value=\"$w\">$w</option><br>";
	}
	?>
	</select>
	<input type="submit" name="submit" value="Envoyer">
</form>

<?php 
// Si le formulaire a été envoyé alors on s'occupe de cette partie de l'affichage
} else {
    // Retransmettre la réponse du visiteur via le formulaire plus haut, dans la première partie en "if"
    $city = $_POST['city'];
    // Retrouver la correspondance de la clé dans le tableau, donc on cherche par ex à quoi correspond "Lagos " -> "?" 
    //$country = array_search($city, $world); deuxième possibilité d'écriture, qui consiste ici a flipper la clé et la value du tableau associatif plus haut.
    // sinon on peut simplement conserver l'affichage classique qui est écrit entre commentaires et cela fonctionne également
    $country = array_flip($world);
    // Renvoi les infos a l'utilisateur, on prend $city qui a été choisi plus haut, dans le formulaire, et $country, qui vient d'être créée, selon la saisie de l'utilisateur
    echo "<p>$city is in $country[$city].</p>"; 
}
?>

<form method="post">
	<input type="submit" value="reset">
</form>





<br><br><br><hr><br><br>




<?php 
// ------------------------------------------------------------------------ 6) Manipulate Arrays, GO ! ------------------------------------------------------------------- //

// Dans cet exercice il va falloir créer un array des 30 jours d'un mois au printemps, et y affectuer pour chacun des jours une estimation de la température la plus haute qui puisse arriver
// Ensuite, il va falloir recupérer la température moyenne, les 5 températures les plus chaudes, et les 5 températures les plus froides 
// et les afficher

// Création du tableau des degrés pour un mois d'Avril
$avrilHighTemps = array(21, 23, 20, 18, 17, 25, 26, 27, 27, 28, 23, 24, 21, 19, 17, 16, 17, 20, 23, 23, 25, 22, 24, 27, 28, 27, 26, 24, 20, 24);

// On recupère d'abord le nombre de témperatures listés: 
$count = count($avrilHighTemps);
echo "<p>Le nombre de températures contenu dans le tableau est de : " . $count . " températures</p>";

// avoir un total de toutes les températures
$total = 0;
foreach ($avrilHighTemps as $aHT){
    $total += $aHT; // affichera pour le total 682
}

// on calcule la moyenne selon le total de température qu'on a calculé plus haut
$moyenne = round($total / $count);
echo "<p>La moyenne des températures contenu dans le tableau est de : " . $moyenne . "&deg;</p>";

// on trie le tableau des températures et on récupère le 5 plus hautes et les 5 plus basses 
// on utilise pour ça la fonction rsort pour le classement dans l'ordre descendant

rsort($avrilHighTemps);

$hauteTempe = array_slice($avrilHighTemps, 0, 5);
    echo "<p>Les 5 températures les plus chaudes pour le mois sont : </p>";
    foreach ($hauteTempe as $hT){
        echo "<li> $hT&deg;</li>";
    }
$basseTempe = array_slice($avrilHighTemps, -5, 5);
    echo "<p>Les 5 températures les plus basses pour le mois sont : </p>";
    foreach ($basseTempe as $bT){
        echo "<li> $bT&deg;</li>";
    }

?>




<br><br><br><hr><br><br>






<?php 
// ------------------------------------------------------------------------ 7) Multi-Dimensional Array, GO ! ------------------------------------------------------------------- //
// Cet exercice sera en 2 parties : 
// Dans cet exercice on va récupérer le tableau de l'ex 5 avec les grandes villes, et le transformer en un array multi-dimensionel. 
// on va réecrire les grandes villes, dans ce tableau multi dimensionel en le nommant $multiCity


?>
