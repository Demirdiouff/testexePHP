<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();



echo '<p>Mise en pratique des sessions</p>';


// On s'amuse a créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Agathe';
$_SESSION['nom'] = 'Cacheux';
$_SESSION['age'] = 72;

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Titre au pif</title>
	</head>
	<body>
		<p>
			Salut <?php echo $_SESSION['prenom'] ?> !<br />
			Tu es a l'accueil du site de test de sessions. Tu veux te balader ?
		</p>
		<p>
			<a href="cours10bisbis.php">Lien vers une page autre</a><br />
			<a href="cours10bisbisbis.php">Lien vers une page encore autre</a><br />
			<br />
			<br />
			<a href="cours10.php">Revenir au cours</a>
		</p>
	</body>
</html>