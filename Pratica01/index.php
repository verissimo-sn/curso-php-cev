<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prática 01</title>
</head>
<body>
  <pre>
    <?php
      require_once "Livro.php";
      require_once "Pessoa.php";

      $pessoa[0] = new Pessoa("carlos", 18, "M");
      $pessoa[1] = new Pessoa("Juliana", 22, "F");

      $livro[0] = new Livro("PHP vol1", "Jururu Cardoso", 300, $pessoa[0]);
      $livro[1] = new Livro("PHP vol2", "Jururu Cardoso", 400, $pessoa[0]);
      
      $livro[3] = new Livro("JavaScript vol1", "Jucileia da Silva", 600, $pessoa[1]);
      $livro[4] = new Livro("JavaScript vol2", "Jucileia da Silva", 200, $pessoa[1]);

      print_r($pessoa[0]);
      print_r($livro[0]);

      $livro[0]->detalhes();
      $livro[0]->abrir();
      $livro[0]->folhear(100);
      $livro[0]->avancarPag();
      echo "<br><br>";
      $livro[0]->detalhes();

    ?>
  </pre>
</body>
</html>