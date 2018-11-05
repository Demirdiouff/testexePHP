<?php 

include 'Debug.php';

// ------------------------------------------------------------------------ 7) Multi-Dimensional Array, GO ! ------------------------------------------------------------------- //
// Cet exercice sera en 2 parties : 
// Dans cet exercice on va récupérer le tableau de l'ex 5 avec les grandes villes, et le transformer en un array multi-dimensionel. 
// on va réecrire les grandes villes, dans ce tableau multi dimensionel en le nommant $multiCity
// ensuite on va devoir afficher le tableau dans un table en HTML et effectuer l'affichage en respectant l'ordre

// la deduxième partie de l'exercice va être de reprendre le tableau, d'en faire un tableau "deux dimensional array"
// voir plus bas pour la suite

// Exercice plus compliqué : tenter de réaliser cet exercice en POO. 
// Challenge... ... ... ... 

$cities = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

class TableauTest {
    
    
    private $value; // array variable
    
    public function setValue($value){
        if (!is_array($value)){
            die ("Error : value is not an array.");
        }
        $this->value = $value;
    }
    
    public function getValue(){
        return $this->value;
    }
    
    public function listeTableau($value){
        sort($value);
        echo "<ol>";
        foreach ($value as $city){
            echo "<li>" . $city . "</li>";
        }
        echo "</ol>";
    }
}


$listeTableau = new TableauTest();
$listeTableau->listeTableau($cities);


?>
