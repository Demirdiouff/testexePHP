<?php

$alphabet = 'abcdefghijklmnopqrstuvwxyz';

$motPendu = 'tronconneuse';
$recherche = null;

// permet de faire afficher la valeur de $motPendu dans l'input "motPendu" qui reste fixe
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

// Afficher le nombre de _ _ _ correspondant au nombre de lettre qu'il y a dans un mot
// défini plus haut

for ($i = 0; $i < strlen($motPendu); $i++) {
    $recherche[$i] = "_";
    echo $recherche [$i] . " ";
}

?>