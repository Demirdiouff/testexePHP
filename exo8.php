<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 8</strong></p>';


echo 'Bonus ! <br>
Tu vas écrire une fonction qui trie le tableau de l\'exercice 3. <br>
Pour afficher au final : 17, 42, 111. <br>

Aucun de ces exercices n\'est difficile si on a bien compris comment fonctionne le php <br>
(en gros, aucun ne me prendrai plus de quelques minutes, à part les deux derniers (disons 15mn grand max)) <br>
mais je pense que ça va pointer certains trucs que tu maitrises mal, et ça devrait te faire beaucoup de bien et clarifier des choses pour la suite. ';


echo '<p><strong>Correction : </strong></p>';


// Quand on connait pas le nb de lignes dans le tab
$tab = array('42', '17', '111');
sort($tab);
foreach ($tab as $detail)
{
    echo '<p>' . $detail . '</p>';
}




// Comment faire avec celui la vu qu'il y a deux entrées, quand j'applique sort, il trie que 0-1-2... ????? 

// // Quand on manipule le tab pour qu'il affiche ce que l'on souhaite
// $tab = array('Case 0, ' => 'valeur 42;', 'Case 1, ' => 'valeur 17;', 'Case 2, ' => 'valeur 111;');
// foreach ($tab as $libelle => $detail)
// {
//     echo '<p>' . $libelle . ' ' . $detail . '</p>';
// }