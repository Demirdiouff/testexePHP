<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 9</strong></p>';

include_once 'Debug.php';

// Exercice horloge : 
// trois champs : heure, minutes, secondes. Avec un bouton "Ajouter une seconde" qui va rajouter une seconde etc... 
// Mais si l'heure est 23 h 59 min 59 s alors -> 00 h 00 min 00 s


$heure = null;
$minutes = null;
$secondes = null;

$nouvHeure = null;
$nouvMinutes = null;
$nouvSecondes = null; 

if (isset($_POST['secondes'], $_POST['minutes'], $_POST['heure'])) {
    $secondes = $_POST['secondes'];
    $nouvSecondes = $secondes;
    
    $nouvMinutes = $_POST['minutes'];
    $minutes = $nouvMinutes;
    
    $nouvHeure = $_POST['heure'];
    $heure = $nouvHeure;
    $nouvSecondes ++;
    echo ("ligne : " . __LINE__ . "<br>");
}

if (isset($_POST['ajouterUneSeconde'])) {
    if ($nouvSecondes > 59) {
        $nouvSecondes = 00;
        $nouvMinutes ++;
        if ($nouvMinutes > 59) {
            $nouvMinutes = 00;
            $nouvHeure ++;
            if ($nouvHeure > 23) {
                $nouvHeure = 00;
            }
        }
    }
}



?>

<body>

	<p>Entrez une heure :</p>
	<hr style="width: 150px; float: left">

	<form method="POST"><br>
		<p><input style="width: 200px" type="number" min="00" max="23" name="heure" placeholder="Heure :  (entre 00 et 23)" value="<?php echo $heure?>"></p>
		<p><input style="width: 200px" type="number" min="00" max="59" name="minutes" placeholder="Minutes :  (entre 00 et 59)" value="<?php echo $minutes?>"></p>
		<p><input style="width: 200px" type="number" min="00" max="59" name="secondes" placeholder="Secondes :  (entre 00 et 59)" value="<?php echo $secondes?>"></p>
		<input type="submit" name="enregistrementHeure" value="Rentrez cette heure">
		<?php echo ("ligne : " . __LINE__ . "<br>"); ?>
	</form><br>
	
	
	<p>Voici l'heure que vous avez rentré : <?php echo $heure . 'h '; echo $minutes . 'min '; echo $secondes . 's.' ?></p>
	
	
	
	<form method="POST">
		<p><input style="width: 200px" type="hidden" min="00" max="23" name="heure" placeholder="Heure :  (entre 00 et 23)" value="<?php echo $nouvHeure?>"></p>
		<p><input style="width: 200px" type="hidden" min="00" max="59" name="minutes" placeholder="Minutes :  (entre 00 et 59)" value="<?php echo $nouvMinutes?>"></p>
		<p><input style="width: 200px" type="hidden" min="00" max="59" name="secondes" placeholder="Secondes :  (entre 00 et 59)" value="<?php echo $nouvSecondes?>"></p>
		<input type="submit" name="ajouterUneSeconde" value="Ajouter une seconde ?">
		<?php echo ("ligne : " . __LINE__ . "<br>"); ?>
	</form>
	<p>Voici la nouvelle heure actuelle, on avance dans le temps... : <?php echo $nouvHeure . 'h '; echo $nouvMinutes . 'min '; echo $nouvSecondes . 's.' ?></p>
		
</body>
