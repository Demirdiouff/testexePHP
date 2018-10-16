<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';

// Exercices via le site
// https://www.phpexercises.com/php-show-text-browser.html
// Faire pleins d'exercices pour devenir meilleur en PHP
// C'est parti !


// ------------------------------------------------------------------ 1) Simple form with PHP response, GO ! ------------------------------------------------------------------- //

// Ici on fait passer des informations via les formulaires en HTML via la methode "$_POST", qui recupère les informations via un bouton submit
// la methode "$_GET" quant à elle recupère les informations qui se transmettent via l'URL
// Ce qui a été appliqué ici, c'est l'envoi de l'action du formulaire qui sera traité vers la page test.php et qui affichera le contenu de "$_POST"
// Voir la page "test.php" pour le résultat de l'action


?>

<form method="post" action="test.php">
	<input type="text" name ="villePref" placeholder="Votre ville préférée" value="">
	<input type="submit" value="Confirmer">
</form>

<form>
	<input type="submit" value="Reset">
</form>



<br><br><br><hr><br><br>



<?php 
// -------------------------------------------------------- 2) Interactive form with if, else statement, GO ! ---------------------------------------------------------- //

// ici on applique le même principe, sauf qu'on va faire passer l'information sur la même page, et non sur une autre page "test.php";
// il nous faut dire que le formulaire doit s'afficher si il n'y a aucune information, et il ne s'affiche plus si une information concernant un "$_POST" a été rentré 
// l'action va appeller la page en elle même
// TIP : dans le formulaire input, si on veut gérer l'affiche du formulaire au départ, et plus après une fois qu'on a quelque chose de stocké dans "$_POST"
// il faut bien renseigner un "name" dans l'"input submit" du formulaire 


if (!isset($_POST['submit'])){
?>
<form method="post">
	<input style="width: 200px;" type="text" name="deuxVillePref" placeholder="Votre deuxième ville préférée" value="">
	<input type="submit" name="submit" value="Envoyer">
</form>

<form>
	<input type="submit" value="Reset">
</form>
<?php 
} else {
    $city = $_POST['deuxVillePref'];
    echo "Votre deuxième ville préférée est : " . $city;
}
?><br><br>
<?php
var_dump($_POST);
?>


<br><br><br><hr><br><br>



<?php 
// -------------------------------------------------------- 3) Interactive form with if, else statement, GO ! ---------------------------------------------------------- //

// ici on reprend toujours le même contexte, sauf qu'on va devoir préciser le jour de la semaine souhaité, et selon le jour il y aura un élément d'affichage différent 
// on va devoir jouer avec les if else elseif else

// possibilité de rajout pour gérer les majuscules et minuscules à l'intérieur des boucles "if else elseif" pour que lors de la saisie dans le champ input, le texte recupéré 
// soit le même, même si on met lundi, Lundi, ou LUNDI
?>

<?php 
$jour = null;

if (!isset($_POST['submit'])){

?>

<form method="post">
	<input type="text" name="jour" placeholder="Saisissez votre jour favori" value="">
	<input type="submit" name="submit"> 
</form>

<?php 
} else {
$jour = $_POST['jour'];
$jour = strtolower($jour); // ici on gère pour que l'entrée du input se transforme en caractères minuscules, qui nous permet de rentrer dans les conditions proposés ci-dessous

if ($jour == 'lundi')
{
    echo "Laugh on Monday, laugh for danger."; 
}
    elseif ($jour == 'mardi')
    {
        echo "Laugh on Tuesday, kiss a stranger."; 
    }
        elseif ($jour == 'mercredi')
        {
            echo "Laugh on Wednesday, laugh for a letter."; 
        }
            elseif ($jour == 'jeudi')
            {
                echo "Laugh on Thursday, something better."; 
            }
                elseif ($jour == 'vendredi')
                {
                    echo "Laugh on Friday, laugh for sorrow."; 
                }
                    elseif ($jour == 'samedi')
                    {
                        echo "Laugh on Saturday, joy tomorrow."; 
                    }
                        elseif ($jour == 'dimanche')
                        {
                            echo "It's not a good day."; 
                        } else {
                            echo "Pas de poème pour ce jour...";
                        }
}
?>

<form method="post">
	<input type="submit" value="Reset">
</form>



<br><br><br><hr><br><br>




<?php 
// -------------------------------------------------------- 4) Interactive form with "switch" statement, GO ! ---------------------------------------------------------- //

// Même principe que l'exercice du dessus, sauf qu'au lieu d'écrire les conditions avec des if, cette fois ci on va passer par le switch
// Possibilité de réaliser cet exercice via l'utilisation des selecteurs en HTML également, le code mis en commentaire est fonctionnel
// ici nous sommes repassés par l'écriture classique

if (!isset($_POST['submit'])){

?>

<!-- <form method="post"> -->
<!-- Please choose a day:<p /> -->
<!-- <select name="day"> -->
<!--    <option value="lundi">Lundi</option> -->
<!--    <option value="mardi">Mardi</option> -->
<!--    <option value="mercredi">Mercredi</option> -->
<!--    <option value="jeudi">Jeudi</option> -->
<!--    <option value="vendredi">Vendredi</option> -->
<!--    <option value="samedi">Samedi</option> -->
<!--    <option value="dimanche">Dimanche</option> -->
<!-- </select>  -->
<!-- <p /> -->
<!-- <input type="submit" name="submit" value="Go"/> -->
<!-- </form> -->

<form method="post">
	<input type="text" name="day" placeholder="Saisissez votre jour favori" value="">
	<input type="submit" name="submit"> 
</form>

<?php } else { ?>
<?php
    $jourChoisi = $_POST['day'];
    $jourChoisi = strtolower($jourChoisi);

    switch ($jourChoisi) {
        case 'lundi':
            echo "Laugh on Monday, laugh for danger.";
            break;
        case 'mardi':
            echo "Laugh on Tuesday, kiss a stranger.";
            break;
        case 'mercredi':
            echo "Laugh on Wednesday, laugh for a letter.";
            break;
        case 'jeudi':
            echo "Laugh on Thursday, something better.";
            break;
        case 'vendredi':
            echo "Laugh on Friday, laugh for sorrow.";
            break;
        case 'samedi':
            echo "Laugh on Saturday, joy tomorrow.";
            break;
        case 'dimanche':
            echo "It's not a good day.";
            break;
        default:
            echo "Dommage, ce n'est pas un jour comme les autres...";
            break;
    }

}

?>

<form method="post">
	<input type="submit" value="Reset">
</form>