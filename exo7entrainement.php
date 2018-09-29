<?php 

// si le jeu est commencé
// if (isset($chiffreSecret)){
//     // si c'est la première fois
//     if (!isset($aDeviner)) {
//         // choisir le nombre à deviner
//         $aDeviner=rand(0,100);
//         // c'est le premier essai
//         $nbEssai=1;
//     }
    
//     echo 'Le nombre choisi es entre 0 et 100 <br />';
//     // si il y a une proposition à tester
//     if (isset($nbTeste)) {
//         $nbTeste=$nbTeste*1;
//         echo 'Tu viens de proposer le nombre' . $nbTeste . ' ';
//         // si tu as trouvé 
//         if ($nbTeste == $aDeviner) {
//             echo 'OK tu as gagné en ' . $nbEssai . ' veux-tu <a href="exo7.php">recommencer ?</a>';
//         } else { // dans le cas de '$nbTeste!=$aDeviner' : pas trouvé 
//             if ($nbTeste < $aDeviner) { // proposition trop petite
//                 echo 'Trop petit';                
//             }
//             if ($nbTeste > $aDeviner) { // proposition trop grande
//                 echo 'Trop grand';
//             }
//         } // fin de if ($nbTeste == $aDeviner) 
//     }
//     if (isset($aDeviner) && ($nbTeste!=$aDeviner)) {
//         echo 'C\'est ton ' . $nbEssai . ' ';
//     }


?>

<?php 

//     } // fin de if (isset($aDeviner) && ($nbTeste!=$aDeviner))
        


    // Ecriture du raisonnement pour résoudre le problème en "pseudo code" 
    
    //   var $chiffreAuPif          random 0,100
    //   var $chiffreTest           pour le nb qu'on teste
    //   var $nbEssai               pour stocker et limiter la recharge a 6 fois 
    

    //   $chiffreAuPif              sera stocké dans un premier input et ne bougera plus même lorsqu'on appuie sur un input submit
    //   $chiffreTest               va faire incrémenter la valeur $nbEssai de +1 à chaque fois qu'un submit est clicker
    
    //   $chiffreAuPif              doit être comparé par des 'if else' a $chiffreTest sur les conditions > ou < pour afficher un message plus gros ou plus petit
    //   $chiffreTest               si $chiffreTest équivaut a $chiffreAuPif alors on valide le jeu et on affiche en combien d'essai $nbEssai on l'a réussi
    

?>