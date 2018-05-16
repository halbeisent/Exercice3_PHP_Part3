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
  //Tant que la valeur de $firstNumber est supérieure ou égale à 10,
  while ($firstNumber >= 10) { ?>
    <!-- On affiche le résultat du calcul,  -->
    <p><?php echo $firstNumber * $secondNumber;?></p>
    <!-- Puis on décrémente la variable -->
    <?php $firstNumber--;
  }
  ?>
</body>
</html>
