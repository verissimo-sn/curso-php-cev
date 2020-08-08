<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco Aula 05</title>
</head>
<body>
  <?PHP
    require_once 'clientebanco.php';
    require_once 'contabanco.php';

    $p1 = new ContaBanco(); //Jubileu
    $p2 = new ContaBanco(); //Creusa

    //Jubileu
    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p1->setNumConta(1111);
    $p1->depositar(500);
    $p1->sacar(1000);
    $p1->fecharConta();

    print_r($p1);


    // Creusa
    $p2->abrirConta("cp");
    $p2->setDono("Creusa");
    $p2->setNumConta(2222);
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->fecharConta();
    print_r($p2);

  ?>
</body>
</html>