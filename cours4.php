<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';



                                                          // ---------------- Tableaux ------------------- //
// les tableaux sont des variables qui contiennent des variables
// les tableaux commencent toujours a 0

$prenoms [0] = 'Mathieu';
$prenoms [1] = 'Marie';
$prenoms [2] = 'Robert';

// possibilité d'écrire également de cette manière : 
$prenoms = array('Mathieu', 'Marie', 'Robert');

// pour afficher une valeur de tableau :
echo $prenoms[1];


                        echo '<br>' . '<br>' . '<br>';


// pour faire afficher l'intégralité d'un tableau (seulement pour faire debuguer, ne pas faire de print_r dans son code) :
echo print_r($prenoms);


                        echo '<br>' . '<br>' . '<br>';

                        
// On peut également faire un tableau qui possède plusieurs caractéristiques en même temps
$personnage = array('Nom : ' => 'Demirdiouff', 'Prenom : ' => 'Ded', 'Age : ' => 15);
print_r($personnage);


                        echo '<br>' . '<br>' . '<br>';


// Faire afficher les valeurs des tableaux une par une avec for (quand on connait le nombre de lignes dans le tableau) :
for ($numero = 0 ; $numero < 3 ; $numero++) {
    echo '<p>' . $prenoms[$numero] . '</p>';
}


                        echo '<br>' . '<br>' . '<br>';
    

// Faire afficher les valeurs des tableaux avec un foreach (quand on ne connnait pas le nombre de lignes dans le tableau) : 
foreach ($personnage as $detail) {
    echo '<p>' . $detail . '</p>';
}


                        echo '<br>' . '<br>' . '<br>';

                        
foreach ($prenoms as $details2) {
    echo '<p>' . $details2 . '</p>';
}


                        echo '<br>' . '<br>' . '<br>';

// Différente façon de procéder, pour le cas de $personnage, vu qu'on possède 2 entrées pour chaque ligne [0], [1], [2] du tableau 
// créer 2 variables va nous permettre d'éclaircir l'affichage du tableau 
// et de voir ce a quoi ça correspond en concaténant
foreach ($personnage as $libelle => $details) {
    echo '<p>' . $libelle . ' ' . $details . '</p>';
}