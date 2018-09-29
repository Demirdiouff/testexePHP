<?php

echo '<a href="index.php">Retour au menu</a><br><br><br>';



                                                        // ---------------- Boucles ------------------- //
// Bien penser a incrementer, sans quoi la boucle while tournera en rond et risque de faire planter
// pour incrementer (passer +1 à chaque fois, on fait '$exemple++'
// Possibilité de mettre l'objet dans l'echo pour compter le nombre de fois qu'il a tourné jusqu'à atteindre la limite
echo '<p><strong>Test avec boucle While</strong></p>';

$repetitions = 0;

while ($repetitions <= 10) {
    echo 'J\'ai été puni, je dois le rédiger 10 fois...' . 'et j\'en suis à la ' . $repetitions . 'ème.' . '<br>' . '<br>';
    $repetitions++;
}

echo '<br>';
echo '<br>';
echo '<br>';

// Autre type de boucle qui est la boucle :
// for ($i = 1 ; $i <= 10 ; $i++) {} 
echo '<p><strong>Test avec boucle For</strong></p>';

for ($repetitions = 0 ; $repetitions <= 10 ; $repetitions++) {
    echo 'J\'ai été puni encore une fois.. zut.. cette fois-ci je dois le rédiger 20 fois,' . ' et j\'en suis à la ' . $repetitions . 'ème.' . '<br>' . '<br>';
}