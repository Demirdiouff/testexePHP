<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 9 (entrainement)</strong></p>';


$heure = null;
$minutes = null;
$secondes = null;

if (isset($_POST['secondes'], $_POST['minutes'], $_POST['heure'])) {
    $secondes = $_POST['secondes'];
    $minutes = $_POST['minutes'];
    $heure = $_POST['heure'];
    $secondes++;
} if ($secondes > 59) {
    $secondes = 00;
    $minutes++;
    if ($minutes > 59) {
        $minutes = 00;
        $heure++;
        if ($heure > 23) {
            $heure = 00;
        }
    }
}

?>


<body>
	<form method="POST">
		<p><input style="width: 250px;" type="text" name="heure" placeholder="Saisissez un nombre entre 0-23" value="<?php echo $heure ?>"></p>
		<p><input style="width: 250px;" type="text" name="minutes" placeholder="Saisissez un nombre entre 0-59" value="<?php echo $minutes ?>"></p>
		<p><input style="width: 250px;" type="text" name="secondes" placeholder="Saisissez un nombre entre 0-59" value="<?php echo $secondes ?>"></p>
		<input type="submit" name="chiffreAjoute" value="Ajouter + 1">
	</form>
</body>


