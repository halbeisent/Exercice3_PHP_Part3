<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 3 Partie 3 PHP</title>
</head>
<body>
  <?php
  // Je remplis les variables $firstNumber et $secondNumber avant le calcul
  $firstNumber = 100;
  $secondNumber = 5;
  while ($firstNumber >= 10) { //Tant que la valeur de $firstNumber est supérieure ou égale à 10,
    echo $firstNumber*$secondNumber . '<br />'; //On affiche le résultat du calcul,
    $firstNumber--; //Puis on décrémente la variable
  }
  ?>
</body>
</html>
