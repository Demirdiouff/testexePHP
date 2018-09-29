<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';


                                                // ---------------- Déclaration variables ------------------- // 
                                                
// Deux façons d'écrire les echo soit avec les '', soit avec "", dans le cas des guillemets simples ('')
// il faut appliquer la méthode d'écriture de "Calculs variables" (ligne:28) plus bas, avec des guillemets doubles (""), 
// il faut appliquer la méthode ci-dessous
// Dans le cas d'un texte qui contiendra plus tard des guillemets doubles (""), il faudra impérativement utiliser la notation guillemets simples ('') 
echo '<h2>Déclaration variables : </h2><br>';

$ageDuVisiteur = 25;
echo "L'age du visiteur est : $ageDuVisiteur <br>";

$ageDuVisiteur = 35;
echo "<br> Ah non, l'âge du visiteur est en fait de : $ageDuVisiteur";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';




                                                 // ------------------- Calculs variables ------------------- //
                                                 
// Deux façons d'écrire les echo soit avec les '', soit avec "", dans le cas des guillemets simples ('')
// il faut appliquer la méthode d'écriture de "Calculs variables" (ligne:28) avec des guillemets doubles (""),
// il faut appliquer la méthode ci-dessous
// Dans le cas d'un texte qui contiendra plus tard des guillemets doubles (""), il faudra impérativement utiliser la notation guillemets simples ('') 
echo '<h2>Calculs entre variables : </h2><br>';

$prix = 0.15;
echo 'Le prix : ' . $prix . '<br>';
$quantite = 10;
echo 'La quantité : ' . $quantite . '<br><br>';
$total = $prix * $quantite;
echo 'Le total : ' . $total . '<br>';

?>