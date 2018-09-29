<?php
echo '<a href="index.php">Retour au menu</a><br><br><br>';

                                            
                                            
                                            // ---------------- Transmettre des données via l'URL ------------------- //
// Transmettre des données par l'URL permet de récupérer des informations déjà postés dans une précédente page pour faire
// transiter des informations d'une page à une autre
// On utilise $_GET pour récupérer les informations via l'URL depuis la page précedent où on a spécifié dans le "a href" les paramètres
// !!!!!!! NE JAMAIS FAIRE CONFIANCE AUX DONNEES ENVOYEES PAR LES VISITEURS SUR SON SITE !!!!!!!!

// Pour ne pas qu'un visiteur puisse modifier les informations de l'URL et fasse planter le site, on peut definir une condition sur la page d'arrivée voir ci-dessous

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site web</title>
</head>
<body>

	<p>
		<?php
// Pour ne pas qu'un visiteur puisse modifier les informations de l'URL et fasse planter le site, on peut definir une condition sur la page d'arrivée voir ci-dessous
if (isset($_GET['prenom']) and isset($_GET['nom']) and isset($_GET['repeter'])) 
// il faut rajouter le paramètre "repeter" à la main dans l'URL, n'est pas automatique dans ce cas la 
// "isset" permet de déterminer si une variable est définie, et si elle est vraie/existe
{
    $nbRepetitions = (int) $_GET['repeter']; // permet de verifier que ça contient bien un nombre et non un autre type
    if ($nbRepetitions >= 1 AND $nbRepetitions <= 100) { // permet de délimiter en contenant les répétitions entre 1 et 100
        for ($i = 0; $i < $_GET['repeter']; $i++) {
            echo '<p>Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . '</p>';
        }
    } else {
        echo 'Le nombre de répétitions n\'est pas autorisé'; // permet d'afficher le message si le nb de répétitions dépasse la maximale
    }
} else { // ici on vérifie justement dans le cas si il n'y a rien, on affiche un message "d'erreur"
    echo 'Pas de prenom ou de nom défini';
}
?>
	</p>

</body>
</html>
