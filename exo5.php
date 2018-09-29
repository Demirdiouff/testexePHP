<?php

echo '<a href="index.php">Retour au menu</a><br><br>';
echo '<a href="exo5.php">Recommencer</a><br><br>';

echo '<p><strong>Ex : 5</strong></p>';


echo 'Tu reprends l\'exercice 1, sauf qu\'au lieu d\'aller vers la page "nom.php", tu vas pointer sur la page index.php. ';


echo '<p><strong>Correction : </strong></p>';

?>

<?php 
// Le prénom n'a pas été envoyé (ce qui permet d'afficher le formulaire lors de la première lecture de la page)
if (!isset($_POST['prenom'])) {

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site web</title>
</head>
<body>

	<form action="exo5.php" method="POST">
		<p><input type="text" name="prenom" placeholder="Prenom" /></p>
		<p><input type="submit" /></p>
	</form>

</body>
</html>

<?php
    // A ce stade, le prénom a été envoyé, donc la page se recharge, vu que dans le formulaire on rappelle exo5.php
    // Le prénom a bien été envoyé 
    // La page s'affiche du coup sans formulaire et affiche bien le prenom
} else {
    echo '<p>Salut ' . $_POST['prenom'] . ' </p>';
}
?>


