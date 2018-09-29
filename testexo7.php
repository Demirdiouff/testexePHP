<html>
<head>
</head>

<body>

<h1>Devinette</h1>
<h3>Vous devez deviner un nombre que le programme à choisi</h2>
<?php 

// Si le jeu a déjà commencé
if (isset($limite)){
    // si c'est la première fois
    if (!isset($guess)){
        // choisir le nombre à deviner
        $guess=rand(0,$limite); // ou 100 à la place de $limite
        // c'est le premier essai
        $nbEssai = 1;
    }
    echo "Le nombre que j\'ai choisi est entre 0 et $limite. <br />\n";
    // Si il y a une proposition à traiter
    if (isset($proposition)){
        $proposition=$proposition*1;
        echo "Vous venez de proposer $proposition: ";
        // si le joueur a trouvé 
        if ($proposition==$guess){
            echo "\n<h4>Bravo ! Trouvé en " . ($nbEssai-1) . " essais</h4>\n";
            echo "<form method=\"post\">\n";
            echo "<input type=\"submit\" value=\"Recommencer\" />\n";
            echo "</form>\n";
        } else { // si la $proposition n'est pas égale a $guess : pas trouvé
            if ($proposition<$guess){   // proposition trop petite
                echo "Trop petit.<p />\n";
            }
            if ($proposition>$guess){   // proposition trop grande
                echo "Trop grand. <p />\n";
        }
    } // fin de la condition if ($proposition == $guess)
if (isset($guess)&&($proposition!=$guess)){
    echo "C'est votre ".$nbEssai."<sup>" . ($nbEssai==1?"er":"ème") . "</sup> essai.<p />\n";
}   
?>

<table>
<tr><td>
<form method="post">

que proposez-vous? 
<input name="proposition" size="4" />
<input type="text" name="guess" value="<?php echo $guess;?>" />
<input type="text" name="limite" value="<?php echo $limite;?>" />
<input type="text" name="nbEssai" value="<?php echo $nbEssai+1;?>" />
<input type="submit" value="Tester votre proposition" />
</form>
</td></tr>
</table>
<?php 
    } // fin de if(isset($guess) && ($proposition != $guess)) 
}   else { // on commence un jeu 
?>
<form method="post">

	Choisissez la limite (donc la difficulté):
	<select name="limite">
		<option selected="selected">10</option>
		<option>100</option>
		<option>1000</option>
		<option>10000</option>
	</select>
	<input type="submit" value="commencer">
</form>
<?php 
}
?>
</body>
</html>

