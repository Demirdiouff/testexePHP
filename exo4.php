<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 4</strong></p>';


echo 'Soit ce code :<br><br>
$tab = array();<br>
$tab[\'premierElement\'] = 42;<br>
$tab[\'secondElement\'] = 17;<br>
$tab[\'troisiemeElement\'] = 111;<br><br>
Même exercice que le précédent, sauf que ça va écrire automatiquement :<br><br>
Case \'premierElement\', valeur 42.<br>
....';


echo '<p><strong>Correction : </strong></p>';



$tab = array('Case \'premierElement\', ' => 'valeur 42.', 'Case \'deuxièmeElement\', ' => 'valeur 17.', 'Case \'troisiemeElement, ' => 'valeur 111.');

foreach ($tab as $libelle => $detail)
{
    echo '<p>' . $libelle . ' ' . $detail . '</p>';
}