<?php

echo '<a href="index.php">Retour au menu</a><br><br>';

echo '<p><strong>Ex : 10</strong></p>';


// Exercice semblable a l'exo 9, qui était un exercice d'horloge avec un bouton ajouter une seconde
// Dans cet exercice, il faut manipuler les dates, avec le format jour/mois/annee...
// et avec un bouton ajouter un jour à la date à chaque fois
// il faut créer une fonction intermédiaire, pour reprendre le nombre de jour qu'il y a dans un mois (pour éviter les mois a 28,29,30 et 31 jours...)

$jour = null;
$mois = null;
$annee = null;


class MyDate { // Date
    
    private $_jour;
    private $_mois;
    private $_annee;
    
    public function __construct($jour, $mois, $annee) {
        $this->_jour = $jour;
        $this->_mois = $mois;
        $this->_annee = $annee;
    }
    
    public function getJour() {
        return $this->_jour;
    }
    
    public function getMois() {
        return $this->_mois;
    }
    
    public function getAnnee() {
        return $this->_annee;
    }
    
    
    
    public function AjouterJours() {
        $this->_jour++;
        if ($this->_jour > $this->NbJoursDsMois()) {
            $this->_jour = 1;
            $this->_mois ++;
            if ($this->_mois > 12) {
                $this->_mois = 1;
                $this->_annee ++;
            }
        }
    }
    
    public function NbJoursDsMois() {
        switch ($this->_mois) {
            case '1'; 
            return 31;

            
            case '2';
            return 28;
       
            
            case '3';
            return 31;

            
            case '4';
            return 30;

            
            case '5';
            return 31;
  
            
            case '6';
            return 30;

            
            case '7';
            return 31;

            
            case '8';
            return 31;

            
            case '9';
            return 30;

            
            case '10';
            return 31;

            
            case '11';
            return 30;
            
            case '12';
            return 31;
        }
    }
}


if (isset($_POST['jour'], $_POST['mois'], $_POST['annee'])) {
    $jour = $_POST['jour'];
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];
    $myDate = new MyDate($jour, $mois, $annee);
    $myDate->AjouterJours();
} else {
    $myDate = new MyDate(0, 0, 0);
}



?>

<body>
	<form method="POST">
	<p><input style="width:200px" type="text" name="jour" placeholder="Saisissez le jour du mois : " value="<?php echo $myDate->getJour() ?>"></p>
	<p><input style="width:200px" type="text" name="mois" placeholder="Saisissez le mois de l'année : " value="<?php echo $myDate->getMois() ?>"></p>
	<p><input style="width:200px" type="text" name="annee" placeholder="Saisissez l'année : " value="<?php echo $myDate->getAnnee() ?>"></p>
	<input type="submit" name="ajouterUnJour" value="Ajouter un jour"> 
	</form>
</body>
