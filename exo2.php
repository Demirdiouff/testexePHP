<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 2</strong></p>';

echo 'Dans index.php, tu vas rajouter un lien qui va afficher "Batman" et un autre qui va afficher "Superman".<br> 
Quand tu cliques dessus, il faudra aller à la page nom.php et que ça affiche "Bonjour Batman" ou "Bonjour Superman" suivant le lien.<br>
$_REQUEST est interdit (tu peux t\'en servir pour debugger, mais pas pour récupérer les données).
';


echo '<p><strong>Correction : </strong></p>';

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site web</title>
</head>
<body>

	<p>
		<a href="exo2bis.php?prenom=Batman">Bonjour Batman</a>
		<br><br>
		<a href="exo2bis.php?prenom=Superman">Bonjour Superman</a>
	</p>

</body>
</html>