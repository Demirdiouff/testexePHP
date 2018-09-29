<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';


                                                        // ---------------- Sessions & Cookies ------------------- //
// Les sessions constituent un moyen de conserver des variables sur toutes les pages du site. 
// GET et POST sont fait pour transmettre les informations une seule fois d'une page à une autre 

echo '<h2>Fonctionnement des sessions </h2><br>';

echo '<p> 1) Un visiteur arrive sur le site. On demande à créer une session pour lui. PHP génère automatiquement <strong>un numero unique.</strong><br> 
Ce numéro est très gros et écrit en hexadécimal. (Ce numéro sert d\'identifiant et est appelé <strong>"ID de session" (ou PHPSESSID)</strong>. 
PHP transmet automatiquement cet ID de page en page en utilisant un cookie</p>';

echo '<p> 2) Une fois la session générée, on peut créer une infinité de variables de session pour nos besoins. Par exemple, 
on peut créer une variable <strong>$_SESSION[nom]</strong> qui contient le nom du visiteur, <strong>$_SESSION[prenom]</strong> qui contient le prénom etc...
Le serveur conserve ces variables même lorsque la page PHP a fini d\'être générée. 
Cela veut dire que, quelle que soit la page de votre site, vous pourrez récupérer par exemple le nom et le prénom du visiteur par <strong>la superglobale $_SESSION !</strong></p>';

echo '<p> 3) Lorsque le visiteur se déconnecte de votre site, la session est fermée et PHP <strong>"oublie"</strong> alors toutes les variables de session que vous avez créées.
Il est en fait difficile de savoir précisément quand un visiteur quitte votre site. En effet, lorsqu\'il ferme son navigateur ou va sur un autre site, 
le vôtre n\'en est pas informé. Soit le visiteur clique sur un bouton <strong>"Déconnexion"</strong> (que vous avez créé) avant de s\'en aller, soit on attend quelques minutes d\'inactivité
pour le déconnecter automatiquement : on parle alors de <strong>timeout</strong>. Le plus souvent, le visiteur est déconnecté <strong>par un timeout.</strong></p>';


echo '<br><br>';


echo '<h2>Il faut retenir :</h2><br>';

echo '<p><strong>session_start()</strong> : démarre le système de sessions. Si le visiteur vient d\'arriver sur le site, alors un numéro de session est généré pour lui.
Vous devez appelez cette fonction au tout début de chacune des pages où vous aurez besoin des variables de sessions.</p>';
echo '<p><strong>session_destroy()</strong> : ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes
(c\'est le timeout), mais vous pouvez aussi créer une page <Déconnexion> si le visiteur souhaite se déconnecter manuellement</p>';


echo '<br><br>';


echo '<h3>Il y a un petit piège :</h3><br>';

echo '<p> Il faut appeler session_start() sur chacune des pages AVANT d\'écrire le moindre code HTML (avant même la balise <!DOCTYPE>). Si vous oubliez de lancer session_start(), 
vous ne pourrez pas accéder aux variables superglobales $_SESSION.</p>';

echo '<p><a href="cours10bis.php">Aller à la page d\'exemple des sessions</a></p>';



echo '<br><br><br>';



echo '<h2>Fonctionnement des cookies </h2><br>';

echo '<p> 1) Un cookie c\'est un petit fichier que l\'on enregistre sur un ordinateur du visiteur. 
Ce fichier contient du texte, et permet de "retenir" des informations sur le visiteur. Par exemple, 
vous inscrivez dans un cookie le pseudo du visiteur, comme ça, la prochaine fois qu\'il viendra sur votre site
vous pourrez lire son pseudo en allant regarder ce que son cookie contient.</p>';

echo '<p>Chaque cookie stocke généralement une information à la fois. Si vous voulez stocker le pseudonyme du visiteur et sa date
de naissance, il est donc recommandé de créer deux cookies.</p>'; 

echo '<p>Un cookie a une date d\'expiration, passé cette date ils seront automatiquement supprimés du disque dur.</p>';


echo '<br>';
echo '<br>';


echo '<h3>Ecrire un Cookie :</h3>';

echo '<p>Comme une variable, un cookie a un nom et une valeur.<br> 
Pour écrire un cookie, on utilise la fonction PHP "setcookie"<br><br>
On lui donne généralement trois paramètres, dans l\'ordre suivant : <br>
1) Le nom du cookie (ex: pseudo);<br>
2) La valeur du cookie (ex: Ded);<br>
3) La date d\'expiration du cookie sous forme de timestamp (ex: 1090521508)</p>';

echo '<p><strong>Un timestamp : correspond au nombre de secondes écoulées depuis le 1er janvier 1970.</strong><br>
Le timestamp est une valeur qui augmente de 1 toutes les secondes. Pour obtenir le timestamp actuel
on fait appel à la fonction "time()". Pour définir une date d\'expiration du cookie, il faut ajouter au "moment actuel"
le nombre de secondes au bout duquel il doit expirer</p><br>';

echo '<p><strong>Exemple :</strong> Si on veut supprimer le cookie dans 1 an il faudra ecrire "time() + 365*24*3600". 
Cela veut dire timestamp actuel $+$ nombre de secondes dans une année.</p>';
echo '<p><strong>Exemple d\'écriture de cookie :</strong> <br><br>
< ? php setcookie(\'pseudo\', \'Ded\', time() + 365*24*3600); ? ></p><br>';

echo '<p>Securiser son cookie avec le mode httpOnly est vivement recommandé. Cela rend le cookie inaccessible en JS
sur tous les navigateurs qui supportent cette option.</p>';
echo '<p>Permet de réduire les failles XSS au cas où on a oublié d\'utiliser htmlspecialchars a un moment sur le site</p>';

echo '<br>';

echo '<p><strong>L\'exemple plus haut ce transforme en donc :</strong></p><br>
< ? php setcookie(\'pseudo\', \'Ded\', time() + 365*24*3600, null, null, false, true); ? ><br>';