<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 3</strong></p>';


echo 'Soit ce code :<br><br>
$tab = array();<br>
$tab[] = 42;<br>
$tab[] = 17;<br>
$tab[] = 111;<br><br>
Tu vas écrire un code qui va afficher le contenu du tableau en le parcourant, case par case. <br><br>
Le résultat que tu veux, c\'est un truc du genre :<br><br>
Case 0, valeur 42;<br> 
Case 1, valeur 17;<br>
Case 2, valeur 111;<br>';


echo '<p><strong>Correction : </strong></p>';



// Quand on connait le nb de lignes dans le tab
$tab = array();
$tab [0] = '42';
$tab [1] = '17';
$tab [2] = '111';
for ($numero = 0 ; $numero < 3 ; $numero++) 
{
    echo '<p>' . $tab[$numero] . '</p>';
}



echo '<br>';



// Quand on connait pas le nb de lignes dans le tab
$tab = array('42', '17', '111');
sort($tab);
foreach ($tab as $detail) 
{
    echo '<p>' . $detail . '</p>';
}



echo '<br>';



// Quand on manipule le tab pour qu'il affiche ce que l'on souhaite
$tab = array('Case 0, ' => 'valeur 42;', 'Case 1, ' => 'valeur 17;', 'Case 2, ' => 'valeur 111;');
foreach ($tab as $libelle => $detail)
{
    echo '<p>' . $libelle . ' ' . $detail . '</p>';
}