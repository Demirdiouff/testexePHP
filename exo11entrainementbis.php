<?php

include 'Debug.php';
Debug::printr($_POST);
// $alphabet = 'abcdefghijklmnopqrstuvwxyz';

$motPendu = 'tronconneuse';
//$recherche = null;

$lettrePendu = null;
$stockagePendu = null;
$lettresJustes = null;

// permet de faire afficher la valeur de $motPendu dans l'input "motPendu" qui reste fixe
if (isset($_POST['tester'])) {
    $motPendu = $_POST['motPendu'];
}

if (isset($_POST['lettrePendu'])) {
    $lettrePendu = $_POST['lettrePendu'];
}

if (isset($_POST['stockagePendu'])) {
    $stockagePendu = $_POST['stockagePendu'] . $lettrePendu; 
}

if (isset($_POST['lettresJustes'])) {
    $lettresJustes = $_POST['lettresJustes'];
}


?>

<form method="post">
	<p>Mot à trouver : <input type="text" name="motPendu" value="<?php echo $motPendu ?>" disabled="disabled"></p>
	<p>Rentrez une lettre : <input type="text" name="lettrePendu" value="<?php echo $lettrePendu ?>"></p>
	<p>Vous avez déjà essayé : <input type="text" name="stockagePendu" value="<?php echo $stockagePendu ?>"></p>
	<p>Les lettres justes trouvées jusqu'à maintenant : <input type="text" name="lettresJustes" value="<?php echo $lettresJustes ?>"></p>
	<input type="submit" value="tester">
</form>

<form method="post">
<p><input type="submit" value="reset"></p>
</form>

<?php

//echo $motPendu[0];


// Afficher le nombre de _ _ _ correspondant au nombre de lettre qu'il y a dans un mot
// défini plus haut
for ($nbLettre = 0; $nbLettre < strlen($motPendu); $nbLettre++) {
    // il va falloir a l'intérieur de la boucle for en créer une autre pour parcourir la chaine de carac stockagePendu  
    // pour chaque lettre de stockagePendu tester si ça existe ou non
    // créer une autre variable pour sauvegarder les lettres trouvées 
    if (isset($_POST['lettresJustes'])) {
        $lettresJustes = $_POST['lettresJustes'];
    }
    //echo $motPendu[$nbLettre];
    //echo ("<br />lettrePendu=" . $lettrePendu . " - motPendu=" . $motPendu[$nbLettre] . "<br />\n");
        if ($lettrePendu === $motPendu[$nbLettre]) {
            echo $motPendu[$nbLettre];
        } else {
            echo " _ ";
        }
        
        if (isset($_POST['stockagePendu'])) {
            if ($lettrePendu === $motPendu[$nbLettre]) {
                $lettresJustes = $_POST['lettresJustes'];
            }
        }   
}
    
    // $stockagePendu arrive bien a stocker plusieurs lettres, la variable stocke tout ce qu'on met dans l'input
    echo '<br/><br/>';
    echo $stockagePendu;
    echo '<br/><br/>';
    echo $lettresJustes;
    
    
    //$recherche[$nbLettre] = "_";
    //echo $recherche [$nbLettre] . " ";

?>