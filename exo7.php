<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 7</strong></p>';


echo 'Jeu de devinette, trouver un nombre entre 1 et 100. <br>
Le programme décide d\'un nombre au hasard entre 1 et 100, toi tu as ton formulaire ou tu peux saisir un chiffre. <br>
Si c\'est le bon, ca affiche "ok", sinon, "trop grand" ou "trop petit". <br>
Au bout de 6 essais, tu as perdu et le site t\'affiche le nombre qu\'il fallait trouver. <br> 
Si tu as trouvé, la seule chose affichée, c\'est "ok" et un bouton "recommencer ?", qui remets tout à zéro pour recommencer avec tes 6 essais. ';


echo '<p><strong>Correction : </strong></p>';

// NbAleatoire = rand (1,100)
// NbAuPif = ''
// NbEssais = ''
    
    
// Tant que  NbAleatoire != NbAuPif && $NbEssais <= 6
// Alors ->  NbEssai++
// Si NbEssais >= 6
//     Afficher -> 'Lien pour recommencer' 
//         Sans pouvoir passer à la suite plus bas si on atteint les 6 essais

// Si  NbAleatoire >= NbAuPif
//     Afficher -> 'Trop grand'
//         Sinon si  NbAleatoire <= NbAuPif
//             Afficher -> 'Trop petit'
//             Sinon
//                 Afficher -> 'Bravo t'as trouvé'


$chiffreMystere = rand (1,100);                        // On initialise $chiffreMystere en lui affectant un rand (0,100)
if (isset($_POST['NombreAleatoire'])) {                // On vérifie si le $_POST de ['NombreAleatoire'] existe 
    $chiffreMystere = $_POST['NombreAleatoire'];       // Si il existe alors on lui attribue $chiffreMystere dans ['NombreAleatoire'] qui y restera stocké jusqu'au résultat final
}

$nbEssai = 0;
if (isset($_POST['NombreEssais'])) {
    $nbEssai = $_POST['NombreEssais'];
    $nbEssai++; 
}

if ($nbEssai > 6) {
    echo 'Perdu, <a href="exo7.php">Recommencer</a>';
} else {
    $chiffreAuPif = null;
    if (isset($_POST['NombreChoisi'])) {
        $chiffreAuPif = 0;
        $chiffreAuPif = $_POST['NombreChoisi'];
    }

    if (isset($_POST['NombreChoisi'])) {
        if ($chiffreMystere > $chiffreAuPif) {
            echo 'Trop petit ';
        } else if ($chiffreMystere < $chiffreAuPif) {
            echo 'Trop grand ';
        } else {
            echo 'Ok';
        }
    }

?>


<body>
	<form method="POST">
	<p><input type="text" name="NombreAleatoire" placeholder ="Nombre" value="<?php echo $chiffreMystere ?>"></p>
	<p><input type="text" name="NombreChoisi" placeholder ="Rentrez au pif" value="<?php echo $chiffreAuPif ?>"></p>
	<p><input type="text" name="NombreEssais" placeholder="Nombre d'essais" value="<?php echo $nbEssai ?>"></p>
	<input type="submit" name="Envoyer" value="Envoyer">
	</form>
</body>

<?php 

}

?>