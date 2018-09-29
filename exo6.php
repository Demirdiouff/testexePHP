<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Mon super site web</title>
</head>


<?php




echo '<a href="index.php">Retour au menu</a><br><br>';
echo '<a href="exo6.php">Recommencer</a><br><br>';

echo '<p><strong>Ex : 6</strong></p>';


echo 'Tu vas faire une page index.php avec un formulaire dedans qui prend un chiffre. <br>
Quand tu cliques sur submit, ca va afficher le chiffre (rechargement sur index.php).<br> 
Si tu saisis un autre chiffre et que tu recliques sur submit, ca va afficher la somme totale, plus le nouveau chiffre. <br>
Ex : 
la première fois, je rentre 2, ça affiche 2. 
la seconde fois, je rentre 5, ça affiche 7 (5 + 2)
la troisième fois, je rentre 3, ça affiche 10 (7 + 3). ';


echo '<p><strong>Correction : </strong></p>';

$chiffre = null;
if (isset($_POST['chiffre'])) {
    $chiffre = $_POST['chiffre'];
}

$chiffre2 = null;
if (isset($_POST['total'])) {
    $chiffre2 = $_POST['total'];
}

?>

<body>

<form action="exo6.php" method="POST">
<p><input type="text" name="chiffre" placeholder="Nombre" /></p>
<p><input type="hidden" name="total" placeholder="Total" value ="<?= $chiffre + $chiffre2?>"/></p>
<p><input type="submit" /></p>
<?php echo $chiffre+$chiffre2 ?>
</form>

</body>
</html>



