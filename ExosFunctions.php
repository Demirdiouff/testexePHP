<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';

// Exercices via le site
// https://www.phpexercises.com/php-show-text-browser.html
// Faire pleins d'exercices pour devenir meilleur en PHP
// C'est parti !


// ------------------------------------------------------------------------ 1) Simple Function, GO ! ------------------------------------------------------------------- //
// créer la plus simple des functions possibles pour pouvoir afficher "Hello, World !"


function hello(){
    echo "Hello, World !";
}

hello();

?>





<br><br><br><hr><br><br>





<?php 
// ------------------------------------------------------------------------ 2) Arguments and return values, GO ! ------------------------------------------------------------------- //
// Dans cet exercice il va falloir créer une function qui accepte 2 arguments et va effectuer le calcul de l'aire d'un rectangle
// et quand on appelle la function, elle doit faire afficher "A rectangle of lenght $l and width $w has an area of $area."; où $l sera la longueur et $w sera la largeur du rectangle et $area l'aire 

function area($l, $w){
    $area = $l * $w;
    echo "<p>A rectangle of lenght $l and width $w has an area of $area. </p>";
}

area(6, 2);

 
// Deuxième partie de l'exo : 
// Cette fois ci il faut refaire le même script, mais y inclure un return et non un echo 

// pas très bien compris du coup le principe de cette deuxième partie avec le return !! //

function areaBis($l, $w){
    $areaBis = $l * $w;
    return $areaBis;
}

echo "<p>A rectangle of lenght 2 and width 3 has an area of " . areaBis(2, 3) . ".</p>";


?>




<br><br><br><hr><br><br>






<?php 
// ------------------------------------------------------------------------ 3) Arguments from user input, GO ! ------------------------------------------------------------------- //
// Dans cet exercice on va reprendre le principe du précédent : 
// Le visiteur aura la possibilité cette fois ci de rentrer dans des champs input la valeur de la longueur et de la largeur, et ensuite, on aura le résultat de l'aire du rectangle,
// avec la même phrase affiché que le précédent exercice

// on declare en premier la function tout en haut 
function areaBisBis($l, $w){
    $areaBisBis = $l * $w;
    return $areaBisBis;
}

if (!isset($_POST['submit'])){
?>

<p>Veuillez rentrer la longueur et la largeur de votre rectangle pour en calculer l'aire ci-dessous :</p>

<form method="post">
	<input type="text" name="lenght" placeholder="Longueur" size="7" value="<?php ?>">
	<input type="text" name="width" placeholder="Largeur" size="7" value="<?php ?>">
	<input type="submit" name="submit" value="Calculer">
</form>

<?php 
// Si le formulaire a été envoyé alors on procède au POST
// on récupère ce qui a été saisi dans le POST via le même procédé que d'habitude et on les stocke dans les variables des paramètres de la function
} else {
    $l = $_POST['lenght'];
    $w = $_POST['width'];
    echo "<p>A rectangle of lenght $l and width $w has an area of " . areaBisBis($l, $w) . ".</p>";
}

?>

<?php // le formulaire en bas est pour permettre de reset les champs, pour recommencer ?>
<form method="post">
	<input type="submit" value="reset">
</form>






<br><br><br><hr><br><br>






<?php 
// ------------------------------------------------------------------------ 4) Functions for HTML, GO ! ------------------------------------------------------------------- //
// Dans cet exercice on va créer un tableau nommée $months
// on va utiliser les mois comme clé et le nombre de jours ds le mois comme valeurs.
// pour fevrier on va utiliser la valeur suivante : "28 days, if leap year 29"

// ensuite il faut ecrire la function qui va nous afficher les éléments d'options pour le formulaire de selection, faut être sur que chaque option s'affiche en lettre majuscules
// la function et l'array doivent être placé avant du HTML dans cet exercice

// ensuite on va demander l'input du visiteur. on va créer un formulaire avec le choix "Please choose a month." a l'intérieur du choix, on va faire la boucle pour recuperer les éléments des mois via 
// la function

// quand le visiteur appuie sur le submit on retourne le résultat : "The month of $month has $number days." où $month sera le choix de l'utilisateur et $number sera le nombre de jours
// bien penser à mettre une valeur différente pour fevrier 28-29

$months = array(
    "January" => "31 days",
    "February" => "28 days, if leap year 29",
    "March" => "30 days",
    "April" => "30 days",
    "May" => "31 days",
    "June" => "30 days",
    "July" => "31 days",
    "August" => "31 days",
    "September" => "30 days",
    "October" => "31 days",
    "November" => "30 days",
    "December" => "31 days",
);

//var_dump($months);

// function selectMonth(){
//     "<form method=\"post\">";
//     "<p>Choisissez votre mois préféré pour en connaître le nombre de jours : </p>";
//     "<select name=\"months\">";
//         foreach ($months as $m){
//             echo "<option value=\"$m\">$m</option><br>";
//         }
//     "</select>";
//     "<input type=\"submit\" name=\"submit\"value=\"Envoyer\">";
//     "</form>";
// }

// selectMonth();

// la function ici permet de faire afficher en lettre majuscule le premier caractère 
// et egalement faire afficher sous forme d'option en HTML pour chaque itération du tableau plus tard
function option($str){
    echo "<option value=\"$str\">" . ucfirst($str) . "</option><br>";
}

// Si le formulaire n'est pas rentré, on l'affiche
if (!isset($_POST['submit'])){
?>
<form method="post">
	<p>Veuillez choisir un mois : </p>
		<select name="month">
			<?php // ici on récupère les valeurs du tableau comme d'habitude, sauf qu'on fait appel à la fonction directement, qui lui s'occupe de traiter l'affichage 
			foreach ($months as $k => $v){
			     option($k); // $k est la clé des mois, $v contient la valeur des nb de jours
			}
			?>
		</select>
		<input type="submit" name="submit" value="Retrouver le nb de jours">
</form>
<?php 
// si le formulaire a été envoyé, alors on execute la suite du script, comme d'habitude on recupère les éléments envoyés via le POST
} else {
    // on recupère le post du bouton submit
    $month = $_POST['month'];
    // on effectue l'exception pour le mois de fevrier
    if ($month == 'February'){
        echo "The month of February has " . $months['February'] . ".";
    } else {
    echo "The month of $month has $months[$month] days.";
    }
}
?>
<form method="post">
	<input type="submit" value="reset">
</form>