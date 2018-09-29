<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 9</strong></p>';

// Exercice horloge : 
// trois champs : heure, minutes, secondes. Avec un bouton "Ajouter une seconde" qui va rajouter une seconde etc... 
// Mais si l'heure est 23 h 59 min 59 s alors -> 00 h 00 min 00 s


$heureSaisi = null;
$minuteSaisi = null;
$secondeSaisi = null;

if (isset($_POST['heureSaisi'], $_POST['minuteSaisi'], $_POST['secondeSaisi'])) {
    $heureSaisi = $_POST['heureSaisi'];
    $minuteSaisi = $_POST['minuteSaisi'];
    $secondeSaisi = $_POST['secondeSaisi'];
}

if (isset($_POST['ajouterUneSeconde'])){
    
}




?>

<body>

	<p>Entrez une heure :</p>
	<hr style="width: 150px; float: left">

	<form method="POST"><br>
		<p><input style="width: 200px" type="number" min="00" max="23" name="heureSaisi" placeholder="Heure :  (entre 00 et 23)" value="<?php echo $heureSaisi?>"></p>
		<p><input style="width: 200px" type="number" min="00" max="59" name="minuteSaisi" placeholder="Minutes :  (entre 00 et 59)" value="<?php echo $minuteSaisi?>"></p>
		<p><input style="width: 200px" type="number" min="00" max="59" name="secondeSaisi" placeholder="Secondes :  (entre 00 et 59)" value="<?php echo $secondeSaisi?>"></p>
		<input type="submit" name="enregistrementHeure" value="Rentrez cette heure">
	</form><br>
	
	<?php if (isset($_POST['enregistrementHeure'])){?>
	<p>Voici l'heure que vous avez rentré : <?php echo $heureSaisi . 'h '; echo $minuteSaisi . 'min '; echo $secondeSaisi . 's.' ?></p>
	
	<form method="POST">
		<p><input style="width: 200px" type="hidden" min="00" max="23" name="heureSaisi" placeholder="Heure :  (entre 00 et 23)" value="<?php echo $heureSaisi?>"></p>
		<p><input style="width: 200px" type="hidden" min="00" max="59" name="minuteSaisi" placeholder="Minutes :  (entre 00 et 59)" value="<?php echo $minuteSaisi?>"></p>
		<p><input style="width: 200px" type="hidden" min="00" max="59" name="secondeSaisi" placeholder="Secondes :  (entre 00 et 59)" value="<?php echo $secondeSaisi?>"></p>
		<input type="submit" name="ajouterUneSeconde" value="Ajouter une seconde ?">
	</form>
	<p>Voici la nouvelle heure actuelle, on avance dans le temps... : <?php ?></p>	
	<?php }?>
</body>
