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

$multiCity = array(
    array ('City', 'Country', 'Continent'),
    array ('Tokyo', 'Japan', 'Asia'),
    array ('Mexico City','Mexico', 'North America'),
    array ('New York City', 'USA', 'North America'),
    array ('Mumbai', 'India', 'Asia'),
    array ('Seoul', 'Korea', 'Asia'),
    array ('Shanghai', 'China', 'Asia'),
    array ('Lagos', 'Nigeria', 'Africa'),
    array ('Buenos Aires', 'Argentina', 'South America'),
    array ('Cairo', 'Egypt', 'Africa'),
    array ('London', 'UK','Europe')
);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Multi-dimensional Array</title>
<style type="text/css">
td, th {
	width: 8em;
	border: 1px solid black;
	padding-left: 4px;
}

th {
	text-align: center;
}

table {
	border-collapse: collapse;
	border: 1px solid black;
}
</style>
</head>

<body>
<h2>City Table<br /></h2>

<?php 
    
class TableauTest {
    
    private $value; // will be an array
    
    // methods 
    // Setter
    public function setValue($value){
        if (!is_array($value)){
            die ("Error : value is not an array");
        } $this->value = $value;
    }
    
    // Getter
    public function getValue(){
        return $this->value;
    }
    
    public function organisationHtmlTableau($value) {
        echo "<table><thead><tr><th>";
        echo $value[0][0] . "</th>\n<th>";
        echo $value[0][1] . "</th>\n<th>";
        echo $value[0][2] . "</th>\n";
        echo "</tr><thead>";
    }
    
    public function iterationTableau($value){
        for ($row = 1; $row; $row++){
            echo "<tr>\n";
            foreach ($value[$row] as $r){
                echo "<td>\n $r </td>";
            }
            echo "</tr>\n</table>";
        }
    }
}

$listeTableau = new TableauTest();
$listeTableau->organisationHtmlTableau($multiCity);
$listeTableau->iterationTableau($multiCity);

?>