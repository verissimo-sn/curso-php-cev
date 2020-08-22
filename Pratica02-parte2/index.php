<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pratica 02</title>
</head>
<body>
  <pre>
    <?php
      require_once "Video.php";
      require_once "Gafanhoto.php";
      require_once "Visualizacao.php";

      echo "<h1>Videos</h1>";
      $video[0] = new Video("Video PHP");
      $video[0]->play();
      $video[0]->like();
      print_r($video[0]);
      
      $video[1] = new Video("Video Java");
      $video[1]->play();
      $video[1]->like();
      print_r($video[1]);
      
      $video[2] = new Video("Video Python");
      $video[2]->play();
      $video[2]->like();
      print_r($video[2]);

      echo "<br><hr><br>";

      echo "<h1>Gafanhotos</h1>";
      $gafanhoto[0] = new Gafanhoto("Carlos", 20, "M", "carlinhos@email.com");
      print_r($gafanhoto[0]);

      $gafanhoto[1] = new Gafanhoto("Mirna", 22, "F", "mirna@email.com");
      print_r($gafanhoto[1]);

      echo "<br><hr><br>";

      echo "<h1>Visualização</h1>";

      $visualizacao[0] = new Visualizacao($gafanhoto[1], $video[0] );
      print_r($visualizacao[0]);

    ?>
  </pre>
</body>
</html>