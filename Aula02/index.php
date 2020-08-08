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

    // **primeiro objeto**
    $c1 = new caneta;
    $c1->cor= "azul";
    $c1->ponta= 0.5;

    $c1->destampar();
    $c1->rabiscar();

    echo "<br><br>";
    // **segundo objeto**
    $c2 = new caneta;
    $c2->cor= "vermelho";
    $c2->carga= 50;
    $c2->ponta= 0.7;

    $c2->tampar();
    $c2->rabiscar();
  ?>
</body>
</html>