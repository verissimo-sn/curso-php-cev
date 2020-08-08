<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 02</title>
</head>
<body>
  <?PHP
    require_once 'caneta.php';

    $c1 = new caneta;
    $c1->modelo = "BIC";
    $c1->cor = "verde";
    // $c1->ponta = 0.5;
    // $c1->carha = 99;
    // $c1->tampada = true;

    $c1->destampar();
    $c1->rabiscar();
  ?>
</body>
</html>