<?php
echo '<a href="index.php">Retour au menu</a><br><br><br>';



                                                    // ---------------- Transmettre des données via un formulaire ------------------- //
// Possible en PHP de récupérer les informations des visiteurs via les formulaires
// Formulaire de contact qui récupère les données qui les retransmet ensuite par mail
// !!!!! La méthode "POST" permet de naviguer les informations de façon invisible (pas par l'URL et peuvent être très très gros) !!!!!
// !!!!! La méthode "GET" permet de transmettre les informations via l'URL !!!!! 

// Il faut toujours surveiller la qualité de l'information envoyée, certains utilisateurs pourraient ecrire du code JS ou HTML
// c'est ce qui s'appelle la faille XSS 

// pour eviter la faille XSS il faut s'assurer que le contenu est protégé, cad qu'on va annuler les balises HTML que le visiteur pourrait envoyer
// htmlspecialchars permet de protéger son contenu de tout code HTML qui pourraient venir s'implanter dans un formulaire pour nuire au site 

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site web</title>
</head>
<body>

	
	<?php 
	if (isset($_POST['prenom']))
	{
	    echo htmlspecialchars . 'Bonjour ' . $_POST['prenom']; // information sur comment faire ??? 
	}
	else 
	{
		echo '<p>Il n\'y a aucun prénom communiqué.</p>';
	}
	?>

	<?php 
	if (isset($_POST['vegetarien'])) 
	{
	    echo '<p>Vous êtes végétarien</p>';
	}
	else 
	{
	   echo '<p>Vous n\'êtes pas végétarien</p>';    
	}
	?>
	
</body>
</html>