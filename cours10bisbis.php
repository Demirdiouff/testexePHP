<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();



echo '<p><strong>Mise en pratique des sessions (exemple de récuperation)</strong></p>';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Titre au pif</title>
</head>
<body>
	<p>
		Re-bonjour <?php echo $_SESSION['prenom'] ?> !<br /> 
		Tu as changé de page, mais je connais toujours ton prénom... c'est dingue non ?<br />
		Je connais même ton âge... qui est de : <?php echo $_SESSION['age'] ?> ans
	</p>
	<br />
	<br />
	<p>
		<a href="cours10bis.php">Revenir en arrière</a>
	</p>
</body>
</html>
