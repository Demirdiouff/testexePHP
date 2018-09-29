<?php

echo '<a href="index.php">Retour au menu</a><br><br>';



                                                    // ---------------- Variables Superglobales ------------------- //
// Les variables superglobales sont générées automatiquement par PHP
// elles permettent différents fonctions sous PHP, comme stocker des informations pendant une durée d'une visite (sessions) 
// mais aussi stocker des informations sur l'ordinateur pendant plusieurs mois (cookies) 

echo '<h2>Les variables superglobales </h2><br>';

echo 'Elles sont écrites en majuscules et commencent toutes, à une exception près par un underscore (_).<br>'; 
echo 'Les superglobales sont des array car elles contiennent généralement de nombreuses informations.<br><br>'; 
echo 'Ces variables sont automatiquement chargées par PHP à chaque fois qu\'une page est chargée.<br> Elles existent donc sur toutes les pages et sont accéssibles partout
: au milieu du code, au début, dans les fonctions ... etc...'; 


echo '<p>Pour afficher le contenu d\'une variable on utilise la fonction <strong>print_r</strong> puisqu\'il s\'agit d\'un <strong>array</strong>, et print_r permet de naviguer dans un tableau</p><br><br>'; 


echo '<p><strong>Voici une liste de variables superglobales : </strong></p>';

echo '<strong>$_SERVER :</strong>';
echo ' ce sont des valeurs renvoyées par le serveur. Elles sont nombreuses et quelques unes d\'entre elles peuvent être d\'une grande utilité. Par exemple la plus globale : $_SERVER["REMOTE_ADDR"], elle permet de donner l\'adresse IP du client qui a demandé a voir la page, ce qui peut être utile pour l\'identifier.<br><br>';


echo '<strong>$_ENV :</strong>';
echo ' ce sont des variables d\'environnement toujours données par le serveur. C\'est le plus souvent sous des serveurs Linux que l\'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour le site web.<br><br>';


echo '<strong>$_SESSION :</strong>';
echo ' on y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d\'un visiteur.<br><br>';


echo '<strong>$_COOKIE :</strong>';
echo ' contient les valeurs des cookies enregistrés sur l\'ordinateur du visiteur. Cela permet de stocker des informations sur l\'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.<br><br>';


echo '<strong>$_GET :</strong>';
echo ' elle contient les données envoyées en paramètres dans l\'URL. <br><br>';


echo '<strong>$_POST :</strong>';
echo ' elle contient les informations qui viennent d\'être envoyées par le formulaire. <br><br>';


echo '<strong>$_FILES :</strong>';
echo ' elle contient la liste des fichiers qui ont été envoyées via le formulaire précédent. <br><br>';