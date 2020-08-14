<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> - Aula 07</title>
</head>
<body>
  <?php

  require_once "lutador.php";
  require_once "luta.php";

  $lutador= array();

  $lutador[0] = new Lutador("Janilton", "Brasil", 20, 1.80, 68.9, 11, 2, 1);
  $lutador[0]->status();

  $lutador[1] = new Lutador("Dimitri", "Russia", 30, 1.60, 70, 8, 3, 4);
  $lutador[1]->status();

  $lutador[2] = new Lutador("Dante", "Italia", 21, 1.53, 82, 9, 1, 1);
  $lutador[2]->status();

  $lutador[3] = new Lutador("Michael", "USA", 19, 1.90, 81, 11, 5, 1);
  $lutador[3]->status();

  $lutador[4] = new Lutador("Akin", "Nigéria", 18, 1.74, 100, 10, 4, 0);
  $lutador[4]->status();

  $lutador[5] = new Lutador("Juan", "Argentina", 27, 1.71, 99, 7, 2, 1);
  $lutador[5]->status();

  ?>
</body>
</html>