<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 1</strong></p>';

echo 'Une première page "index.php" : <br>
Dans ce fichier tu vas faire un formulaire qui va demander un nom.<br>
Il y aura un bouton "submit" et quand tu vas cliquer dessus, tu arriveras sur une seconde page "exo1bis.php"
qui dira "Bonjour xxx" avec xxx qui correspond au nom que tu auras rentré avant.
$_REQUEST est interdit. (tu peux t\'en servir pour debugger, mais pas pour récupérer les données)';


echo '<p><strong>Correction : </strong></p>';

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site web</title>
</head>
<body>

	<form action="exo1bis.php" method="POST">
		<p><input type="text" name="prenom" placeholder="Prenom" /></p>
		<p><input type="submit" /></p>
	</form>

</body>
</html>