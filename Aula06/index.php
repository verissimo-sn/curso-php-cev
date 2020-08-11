<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 06</title>
</head>
<body>
  <h1>Projeto Controle remoto - Aula 06</h1>
  <?php
    require_once 'controleremoto.php';

    $controle = new ControleRemoto;
    $controle->ligar();
    $controle->abrirMenu();
  ?>
</body>
</html>