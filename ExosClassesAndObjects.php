<?php

include 'Debug.php';

echo '<a href="index.php">Retour au menu</a><br><br><br>';

// Exercices via le site
// https://www.phpexercises.com/php-show-text-browser.html
// Faire pleins d'exercices pour devenir meilleur en PHP
// C'est parti !

// ------------------------------------------------------------------------ 1) Select Field Class and Object, GO ! ------------------------------------------------------------------- //
// Dans cet exercice on va aborder les débuts d'une création de formulaire d'enregistrement sur un site web
// Il n'y aura pas de connexion avec une BDD quelconque, cependant, cela va permettre de voir comment se construit la partie PHP en POO
// Cet exercice est coupé en plusieurs parties :

// Dans un premier temps on va commencer par créer un tableau qui contiendra les noms des différents navigateurs
$browsers = array(
    "Firefox",
    "Google Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
);

class Select
{
    private $name;
    // String variable
    private $value;
    // Array variable

    // Methods
    // The String set by this method will be the name of the select field
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    // Cette methode fournit les valeurs utilisées pour les options dans les field select et bien verifier que la valeur est un array
    public function setValue($value)
    {
        if (!is_array($value)){
            die ("Error: value is not an array.");
        }
        $this->value = $value;
    }
    
    public function getValue(){
        return $this->value;
    }
    
    // Cette methode va creer les options select, elle est en privée car il n'y en aura pas besoin a l'exterieur des operations de la classe 
    
    private function makeOptions($value){
        foreach ($value as $v){
            echo "<option value=\"$v\">" . ucfirst($v) . "</option>\n";
        }
    }
    
    // Cette methode regroupe les elements tous ensemble pour créer le champ select final 
    public function makeSelect(){
        echo "<select name=\"" . $this->getName() . "\">\n";
        // On crée les options 
        $this->makeOptions($this->getValue());
        echo "</select";
    }
} // fin de la classe Select 

?>

<h2>User Registration - Browser<br /></h2>

<?php 
// Si le formulaire n'a pas été posté alors on l'affiche : 

if (!isset($_POST['submit'])){
    
?>

<form method="post">
	<p>Name:<br />
	<input type="text" name="name" size="60" />  </p>
	<p>Username:<br />
	<input type="text" name="username" size="60" /></p>
	<p>Email:<br />
	<input type="text" name="email" size="60" /></p>
	<p>Browser:

<?php 
// On instancie l'objet : deuxième étape très importante a retenir dans une construction POO
$browser = new Select();
// On lui definit les propriétés 
$browser->setName('browser');
$browser->setValue($browsers);
// L'objet a maintenant le necessaire, prochaine étape est de créer le select 
$browser->makeSelect();
?>
	</p>
	<input type="submit" name="submit" value="Envoyer" />
</form>

<?php 
// Si le formulaire a été envoyé alors on procède au script suivant : 
} else {
    // Ici on pourrait mettre du code SQL pour pouvoir faire le lien avec la BDD si on souhaitait enregistrer des infos qquepart
    // On recupère les réponses de l'utilisateur
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $selectBrowser = $_POST['browser'];
    
    echo " Les informations suivantes ont été enregistrés pour" . $name . "<br>";
    echo " Nom d'utilisateur" . $username . "<br>";
    echo " L'email est :" . $email . "<br>";
    echo " Navigateur :" . $selectBrowser . "<br>";
    
}

?>

<form method="post">
	<input type="submit" value="reset">
</form>

</body>
</html>