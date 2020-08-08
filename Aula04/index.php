<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 03</title>
</head>
<body>
  <?PHP
    require_once 'caneta.php';

    $c1 = new caneta("bic", "vermelho", 0.7);
    // $c1->setModelo("Bic");
    // $c1->setPonta(0.5);

    // echo "Essa caneta tem o <br> modelo: {$c1->getModelo()}<br> e possui a ponta: {$c1->getPonta()}";

    print_r($c1);
    ?>
</body>
</html>