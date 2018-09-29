<?php
echo '<a href="index.php">Retour au menu</a><br><br><br>';
?>

 
                                                       <!-- ---------------- Includes ------------------- -->

<?php 
// Les includes nous permet d'ajouter des bouts de blocs dans une page principale qui va récupérer toutes les informations
// En récupérant ces informations ça va permettre de les assembler ensemble pour fabriquer une page plus propre et nette
// Les exemples ci-dessous montrent le fonctionnement
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site</title>
</head>

<body>

	<!-- L'en-tête -->

	<header> 
	
	</header>
	
	<?php include ("cours6bis.php"); ?>
	
	<?php include ("cours6bisbis.php"); ?>
	
	<?php include ("cours6bisbisbis.php"); ?>

</body>
</html>