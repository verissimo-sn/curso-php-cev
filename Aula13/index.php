<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 13</title>
</head>
<body>
  <pre>
    <?php
      require_once "Mamifero.php";
      require_once "Lobo.php";
      require_once "Cachorro.php";

      $mamifero = new Mamifero();
      print_r($mamifero);
      $mamifero-> emitirSom();

      $lobo = new Lobo();
      print_r($lobo);
      $lobo-> emitirSom();

      $cachorro = new Cachorro();
      print_r($cachorro);
      $cachorro-> emitirSom();

      echo "<br><hr><br>";

      Echo "<h1>PHP não tem Polimorfismo de sobrecarga!</h1>";

    ?>
  </pre>
</body>
</html>