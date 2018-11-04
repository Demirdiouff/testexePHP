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
    
    echo "Les informations suivantes ont été enregistrés pour " . "<strong>" . $name . "</strong><br>";
    echo "<strong>Nom d'utilisateur : </strong>" . $username . "<br>";
    echo "<strong>L'email : </strong>" . $email . "<br>";
    echo "<strong>Navigateur : </strong>" . $selectBrowser . "<br>";
    
}

?>

<form method="post">
	<input type="submit" value="reset">
</form>

</body>
</html>





<br><br><br><hr><br><br>





<?php 
// ------------------------------------------------------------------------ 2) Multiple Select Field Objects, GO ! ------------------------------------------------------------------- //
// Même exercice que le précédent, sauf que la on va avoir plusieurs choix de select en HTML, avec plusieurs tableaux de référence, 
// On va reprendre la plupart des éléments des fonctions de l'exo précédent, voir quasiment tout, mais créer 2 array en plus, et instancier 2 objets en plus pour effectuer
// un affichage complet à la fin dans la dernière condition else du form soumis


$browsersBis = array(
    "Firefox",
    "Google Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
    );

$speeds = array(
    "Unknown",
    "DSL",
    "T1",
    "Cable",
    "Dialup",
    "Other"
    );

$os = array(
    "Windows",
    "Linux",
    "Macintosh",
    "Other"
    );


class SelectBis{
    // même principe que l'exo précédent, on crée notre classe qui va contenir différentes fonctions
    private $name;  // string variable
    private $value; // array variable
    
    // Methods 
    // Le string généré par cette methode ci-dessous sera le "name" du select en html
    // Setter
    public function setName($name){
        $this->name = $name;
    }
    
    // Getter
    public function getName(){
        return $this->name;
    }
    
    // Cette methode ci-dessous fournis les "value" utilisé pour les options en HTML
    // Setter
    public function setValue($value){
        if (!is_array($value)){
            die ('Error : value is not an array');
        }
        $this->value = $value;
    }
    
    // Getter
    public function getValue(){
        return $this->value;
    }

    // Cette methode ci-dessous va créer les options du champ select. Elle restera privée car il
    // n'y en aura pas besoin pour les opérations a l'extérieur de la classe
    private function makeOptions($value){
        foreach ($value as $v){
            echo "<option value=\"$v\">" . ucfirst($v) . "</option>\n";
        }
    }
    
    // Cette methode ci-dessous va tout mettre ensemble pour créer le champ select global
    public function makeSelect(){
        echo "<select name=\"" . $this->getName() . "\">\n";
        // On crée les options
        echo "<option value=\"No response\">--- Select one ---</option>\n";
        $this->makeOptions($this->getValue());
        echo "</select>";
    }
} // fin de la classe Select

?>


<h2>User Registration<br /></h2>

<?php 
// si le formulaire n'a pas été soumis alors on l'affiche 
if (!isset($_POST['submit'])){
?>

<form method="post">
	<p> Name : <br />
	<input type="text" name="nameBis" size="60" /></p>
	<p> Username : <br />
	<input type="text" name="usernameBis" size="60" /></p>
	<p> Email : <br />
	<input type="text" name="emailBis" size="60" /></p>

<p><strong>Work Access</strong></p>
<p>Primary Browser :

<?php 
// On instancie la classe Select plus haut
$browserWork = new SelectBis();
// on définit les propriétés
$browserWork->setName('browserWork');
$browserWork->setValue($browsersBis);
// l'objet a les données dont il a besoin depuis les commandes précédentes 
// on lui dit de créer le champ select
$browserWork->makeSelect();
// on détruit l'objet pour ne pas encombrer l'utilisation de la mémoire
unset ($browserWork);

// même procédé que plus haut on définit tout pareil pour cette fois ci un champ connection
echo "</p>\n<p>Connection Speed : ";
$speedWork = new SelectBis();
$speedWork->setName('speedWork');
$speedWork->setValue($speeds);
$speedWork->makeSelect();
unset ($speedWork);

// toujours pareil pour le dernier champ select a créer
echo "</p>\n<p>Operating System : ";
$osWork = new SelectBis();
$osWork->setName('osWork');
$osWork->setValue($os);
$osWork->makeSelect();
unset ($osWork);

?>
</p>
<p><strong>Home Access</strong></p>
<p>Primary Browser :

<?php 
$browserHome = new SelectBis();
$browserHome->setName('browserHome');
$browserHome->setValue($browsersBis);
$browserHome->makeSelect();
unset ($browserHome);

echo "</p>\n<p>Connection Speed : ";
$speedHome = new SelectBis();
$speedHome->setName('speedHome');
$speedHome->setValue($speeds);
$speedHome->makeSelect();
unset ($speedHome);

echo "</p>\n<p>Operating System : ";
$osHome = new SelectBis();
$osHome->setName('osHome');
$osHome->setValue($os);
$osHome->makeSelect();
unset ($osHome);

?>
</p>
<p />
<input type="submit" name="submit" value="Envoyer" />

</form>

<?php 
// si le formulaire a été soumis on procède au traitement des données 
} else {
    $nameBis = $_POST['nameBis'];
    $usernameBis = $_POST['usernameBis'];
    $emailBis = $_POST['emailBis'];
    $selectBrowserWork = $_POST['browserWork'];
    $selectSpeedWork = $_POST['speedWork'];
    $selectOsWork = $_POST['osWork'];
    $selectBrowserHome = $_POST['browserHome'];
    $selectSpeedHome = $_POST['speedHome'];
    $selectOsHome = $_POST['osHome'];
    
    echo "Les informations suivantes ont été enregistrés pour " . "<strong>" . $nameBis . "</strong><br>";
    echo "<strong>Nom d'utilisateur : </strong>" . $usernameBis . "<br>";
    echo "<strong>L'email : </strong>" . $emailBis . "<br>";
    echo "<h1><p>Work Access : </h1></p>";
    echo "<strong>Navigateur : </strong>" . $selectBrowserWork . "<br>";
    echo "<strong>Vitesse de connexion : </strong>" . $selectSpeedWork . "<br>";
    echo "<strong>OS : </strong>" . $selectOsWork . "<br>";
    echo "<h1><p>Home Access : </h1></p>";
    echo "<strong>Navigateur : </strong>" . $selectBrowserHome . "<br>";
    echo "<strong>Vitesse de connexion : </strong>" . $selectSpeedHome . "<br>";
    echo "<strong>OS : </strong>" . $selectOsHome . "<br>";

}

?>

