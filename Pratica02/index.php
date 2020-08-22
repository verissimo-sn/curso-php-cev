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

      $video[0] = new Video("Video aula PHP");
      $video[0]->play();
      $video[0]->like();
      print_r($video[0]);
      
      $video[1] = new Video("Video aula Java");
      $video[1]->play();
      $video[1]->like();
      print_r($video[1]);

      $gafanhoto[0] = new Gafanhoto("Carlos", 20, "M", "carlinhos@hotmail.com");
      print_r($gafanhoto[0]);

      $gafanhoto[1] = new Gafanhoto("Carlos", 20, "M", "carlinhos@hotmail.com");
      print_r($gafanhoto[1]);
      
    ?>
  </pre>
</body>
</html>