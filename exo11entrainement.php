<?php

//session_start();

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 11 (entrainement)</strong></p>';

// Exercice : Jeu du pendu
// Dans cet exercice, il faut faire afficher un mot qui affiche des _ _ _ à la place des lettres
// puis un formulaire qui prend une seule lettre, si on tape la lettre juste, alors ça remplace un _ par la lettre en question
// si on a faux, alors ça ajoute un erreur dans le compteur, sachant que si on réussit cela n'ajoute pas d'erreur vu que ça remplace le _
// possibilité de se servir des fonctions php, du type "strpos"

// strpos = Cherche la position de la première occurrence dans une chaîne
// substr = Retourne un segment de chaîne string substr (string $string , int $start [, int $length ])
// strlen = Calcule la taille d'une chaîne

// $_SESSION['motPendu'] = "tronconneuse";

$alphabet = 'abcdefghijklmnopqrstuvwxyz';
$motPendu = 'tronconneuse';

$recherche = null;
$lettres = null;

if (isset($_POST['tester'])) {
    $motPendu = $_POST['motPendu'];
}

?>

<form method="post">
	<p>Mot à trouver : <input type="text" name="motPendu" value="<?php echo $motPendu ?>" disabled="disabled"></p>
	<p><input type="text" name="lettrePendu" value="<?php ?>"></p>
	<input type="submit" value="tester">
</form>

<?php 
if (isset($_POST['lettrePendu'])) {
    for ($i=0; $i<strlen($motPendu); $i++) {
        $recherche [$i] = "_";
    }
}

if (isset($_POST['lettrePendu'])) {
    if (isset($_GET['lettre'])) {
        $lettres = $_GET['lettre'];
        for ($j=0; $j<count($recherche); $j++) {
            if (substr($motPendu, $j, 1) == $_GET['lettre'])
                $recherche [$j] = $_GET['lettre'];
        }
    }
    for ($i=0; $i<count($recherche); $i++) {
        echo $recherche [$i] . " ";
    }
    echo "<br><br/>";
    for ($i=0; $i<strlen($alphabet); $i++) {
        if (strpos($lettres, substr($alphabet, $i, 1)) === false) {
            echo "<a href='exo11entrainement.php?lettre=".substr($alphabet, $i, 1) . "'>".substr($alphabet, $i, 1). "</a> ";
        } else {
            echo substr($alphabet, $i, 1) . " ";
        }
    }
?>

<br/><br/>
<a href="exo11entrainement.php">Recommencer</a>

<?php 
}
?>