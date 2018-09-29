<html>
<body>
	<h1>Devinette n°1</h1>
	<h2>Vous devez deviner un nombre que le programme a choisi</h2>
          <?php
        // si le jeu est commencé
        if (isset($limite)) {
            // si c'est la première fois
            if (! isset($guess)) {
                // choisir le nombre à deviner
                $guess = rand(0, $limite);
                // c'est le premier essai
                $nbessai = 1;
            }
            echo "Le nombre que j'ai choisi est entre 0 et $limite.<br />\n";
            // si il y a une proposition à traiter
            if (isset($proposition)) {
                $proposition = $proposition * 1;
                echo "Vous venez de proposer $proposition: ";
                // si le joueur a trouvé
                if ($proposition == $guess) {
                    echo "\n<h3>Bravo! Trouvé en " . ($nbessai - 1) . " essais</h3>\n";
                    echo "<form method=\"post\">\n";
                    echo "<input type=\"submit\" value=\"Recommencer\" />\n";
                    echo "</form>\n";
                } else { // $proposition!=$guess : pas trouvé
                    if ($proposition < $guess) { // proposition trop petite
                        echo "Trop petit.<p />\n";
                    }
                    if ($proposition > $guess) { // proposition trop grande
                        echo "Trop grand.<p />\n";
                    }
                } // fin de if($proposition==$guess)
            }
            if (isset($guess) && ($proposition != $guess)) {
                echo "C'est votre " . $nbessai . "<sup>" . ($nbessai == 1 ? "er" : "ème") . "</sup> essai.<p />\n";
                ?>
          <table>
		<tr>
			<td>
				<form method="post">
					que proposez-vous? <input name="proposition" size="4" /> <input
						type="hidden" name="guess" value="<?php echo $guess;?>" /> <input
						type="hidden" name="limite" value="<?php echo $limite;?>" /> <input
						type="hidden" name="nbessai" value="<?php echo $nbessai+1;?>" /> <input
						type="submit" value="Tester votre proposition" />
				</form>
			</td>
			<td><form method="post">
					<input type="submit" value="Abandonner" />
				</form></td>
		</tr>
	</table>
          <?php
            } // fin de if(isset($guess)&&($proposition!=$guess))
        } else { // on commence un jeu
            ?>
          <form method="post">
		Choisissez la limite (donc la difficulté): <select name="limite">
			<option selected="selected">10</option>
			<option>100</option>
			<option>1000</option>
			<option>10000</option>
		</select> <input type="submit" value="Commencer" />
	</form>
          <?php
        }
        ?>
          </body>
</html>