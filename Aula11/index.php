<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 11</title>
</head>
<body>
  <pre>
    <?php
      require_once "Aluno.php";
      require_once "Bolsista.php";
      require_once "Professor.php";
      require_once "Tecnico.php";

      $aluno = new Aluno;
      $aluno->setNome("Murilo");
      $aluno->setMatricula(202001);
      $aluno->setIdade(17);
      $aluno->setSexo("M");
      $aluno->setCurso("Engenharia de Software");
      $aluno->pagarMensalidade();
      print_r($aluno);

      $bolsista = new Bolsista;
      $bolsista->setNome("Carla");
      $bolsista->setMatricula(202002);
      $bolsista->setIdade(18);
      $bolsista->setSexo("F");
      $bolsista->setCurso("Ciência da computação");
      $bolsista->setBolsa(20);
      $bolsista->renovarBolsa();
      $bolsista->pagarMensalidade();
      print_r($bolsista);

      $professor = new Professor;
      $professor->setNome("Prof. Lucas");
      $professor->setIdade(30);
      $professor->setSexo("M");
      $professor->setSalario(2000);
      $professor->setEspecialidade("PHP-OO");
      $professor->receberAumento(1000);
      print_r($professor);
      
      $tecnico = new Tecnico;
      $tecnico->setNome("Mirna");
      $tecnico->setMatricula(202006);
      $tecnico->setRegistroProfissioanl(202004);
      $tecnico->setCurso("Engenharia Mecânica");
      $tecnico->setIdade(30);
      $tecnico->setSexo("F");
      $tecnico->praticar();
      print_r($tecnico);
    ?>
  </pre>
</body>
</html>