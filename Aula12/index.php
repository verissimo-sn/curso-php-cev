<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 12</title>
</head>
<body>
  <pre>
    <?php
      require_once "Mamifero.php";
      require_once "Reptil.php";
      require_once "Peixe.php";
      require_once "Ave.php";

      require_once "Canguru.php";
      require_once "Cachorro.php";
      require_once "Cobra.php";
      require_once "Tartaruga.php";
      require_once "GoldFish.php";
      require_once "Arara.php";

      $mamifero = new Mamifero();
      print_r($mamifero);
      $mamifero-> setCorPelo("Preto");
      $mamifero-> setPeso(20);
      $mamifero-> setIdade(4);
      $mamifero-> setMembros("Patas");
      $mamifero-> locomover();
      $mamifero-> alimentar();
      $mamifero-> emitirSom();

      $reptil = new Reptil();
      print_r($reptil);
      $reptil-> setCorEscama("Verde");
      $reptil-> setPeso(6);
      $reptil-> setIdade(100);
      $reptil-> setMembros("Patas");
      $reptil-> locomover();
      $reptil-> alimentar();
      $reptil-> emitirSom();

      $peixe = new Peixe();
      print_r($peixe);
      $peixe-> setCorEscama("Colorido");
      $peixe-> setPeso(1.5);
      $peixe-> setIdade(2);
      $peixe-> setMembros("Nadadeira");
      $peixe-> locomover();
      $peixe-> alimentar();
      $peixe-> emitirSom();
      $peixe-> soltarBolha();

      $ave = new Ave();
      print_r($ave);
      $ave-> setCorPena("Marrom");
      $ave-> setPeso(12);
      $ave-> setIdade(1);
      $ave-> setMembros("Asas");
      $ave-> locomover();
      $ave-> alimentar();
      $ave-> emitirSom();
      $ave-> fazerNinho();

      echo "<br><hr><br>";

      $canguru = new Canguru;
      print_r($canguru);
      $canguru-> usarBolsa();
      $canguru-> locomover();

      $cachorro = new Cachorro;
      print_r($cachorro);
      $cachorro-> enterrarOsso();
      $cachorro-> abanarRabo();
      $cachorro-> locomover();

      $cobra = new Cobra;
      print_r($cobra);
      $cobra-> locomover();

      $tartaruga = new Tartaruga;
      print_r($tartaruga);
      $tartaruga-> locomover();

      $goldFish = new GoldFish;
      print_r($goldFish);

      $arara = new Arara;
      print_r($arara);
   ?>
  </pre>
</body>
</html>