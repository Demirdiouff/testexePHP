<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>TP : Page protégée par mot de passe</strong></p>';
echo '<p>Le mot de passe est "kangourou"</p>';

?>


<?php

// Méthode à faire pour naviguer d'une page a une autre
// La méthode qui est retenue plus bas, qui est actif c'est pour rester sur la même page mais faire apparaître le formulaire tant que le visiteur n'a pas trouvé
// le bon mot de passe 

// if (isset($_POST['motdepasse']) && $_POST['motdepasse'] == 'kangourou') {
//     echo 'Bravo, tu as réussi a pirater la page privée !';
// } else {
//     echo 'Malheureusement, tu n\'as pas réussi...<br>';
//     echo '<a href="tp1.php">Retente ta chance encore quelques fois... !';
// }

// Le mot de passe n'a pas été envoyé ou n'est pas le bon
if (!isset($_POST['motdepasse']) OR $_POST['motdepasse'] != "kangourou") 
{
    // Afficher le formulaire de saisie du mot de passe
    ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Page protégée par mot de passe</title>
</head>
<body>

	<form action="tp1.php" method="POST">
		<p>
			<input type="text" name="motdepasse" placeholder="Saississez le mot de passe" />
		</p>
		<p>
			<input type="submit" />
		</p>
	</form>

</body>
</html>
<?php
    // Le mot de passe a été envoyé et c'est le bon
} else {
    echo '<br>';
    echo '<p>Bravo vous avez réussi a pirater la NASA... !</p>';
    echo '<p>LE CODE SECRET DE LA BOMBE NUCLEAIRE EST : <strong>GR87A-BOAP6-BJAI4</strong></p>';
}
?>