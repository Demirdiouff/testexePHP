<?php

session_start();

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 11</strong></p>';

// Exercice : Jeu du pendu
// Dans cet exercice, il faut faire afficher un mot qui affiche des _ _ _ à la place des lettres 
// puis un formulaire qui prend une seule lettre, si on tape la lettre juste, alors ça remplace un _ par la lettre en question
// si on a faux, alors ça ajoute un erreur dans le compteur, sachant que si on réussit cela n'ajoute pas d'erreur vu que ça remplace le _ 
// possibilité de se servir des fonctions php, du type "strpos"

// strpos = Cherche la position de la première occurrence dans une chaîne 
// substr = Retourne un segment de chaîne string substr (string $string , int $start [, int $length ])
// strlen = Calcule la taille d'une chaîne


$alphabet = "abcdefghijklmnopqrstuvwxyz";
// if (isset($_POST['Generer'])) {
//     $_SESSION['mot'] = null;
// }
$_SESSION['lettres'] = null;
// $lettrePendu = null;

if (!empty($_GET['reset']) && $_GET['reset'] == 'true')
    session_unset();
        
    
?>

<form method="post">
	Mot a trouver : <input type="text" name="motPendu" value="<?php echo $_SESSION['mot'] ?>" disabled="disabled"/><br/>
	<input type="hidden" name="partie" value="new"/>
	<input type="submit" value="Generer"/>
	<!-- <p><input type="text" name="lettrePendu" value ="<?php //echo $lettrePendu ?>" placeholder="Rentrer une lettre" required="required"></p> -->
	<!-- <input type="submit" value="Tester"> -->
</form>

<?php

// if (!isset($_POST['Tester'])) {
//     $_SESSION['mot'] = 'tronconneuse';
//     for ($i=0; $i<strlen($_SESSION['mot']); $i++) {
//         $_SESSION['recherche'][$i] = "_";
//     }
// }

if (isset($_POST['partie']) && $_POST['partie'] == "new") {
    $_SESSION['mot']="tronconneuse";
    for ($i=0; $i<strlen($_SESSION['mot']); $i++) {
        $_SESSION['recherche'] [$i] = "_";
    }
}

// if (isset($_POST['lettrePendu'])) {
//     $lettrePendu = $_POST['lettrePendu'];

//     $pos = strpos($_SESSION['mot'], $lettrePendu);

//     if ($pos === false) {
//         echo "Vous n'avez rien deviné";
//     } else {
//         echo "Vous avez trouvé une lettre, qui se trouve en position '$pos' du mot";
//     }
// }

if (isset($_SESSION['mot'])) {
    if (isset($_GET['lettre'])) {
        $_SESSION['lettres'].= $_GET['lettre'];
        for ($j=0; $j<count($_SESSION['recherche']); $j++) {
            if (substr($_SESSION['mot'], $j,1) == $_GET['lettre'])
                $_SESSION['recherche'][$j] = $_GET['lettre'];
        }
    }
    for ($i=0; $i<count($_SESSION['recherche']); $i++) {
        echo $_SESSION['recherche'][$i]." ";
    }
    echo "<br/><br/>";
    for ($i=0; $i<strlen($alphabet); $i++) {
        if (strpos($_SESSION['lettres'],substr($alphabet, $i, 1)) === false) {
            echo "<a href='exo11.php?lettre=".substr($alphabet, $i, 1). "'>".substr($alphabet, $i, 1)."</a> ";
        } else {
            echo substr($alphabet, $i, 1). " ";
        }
    }

?>

<br/><br/>
<a href="exo11.php?reset=true">Recommencer</a>


<?php 

// echo $_SESSION['lettrePendu'];
}

?>