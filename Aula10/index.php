<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 10</title>
</head>
<body>
  <pre>
    <?php
      require_once "Pessoa.php";
      require_once "Aluno.php";
      require_once "Professor.php";
      require_once "Funcionario.php";

      echo "<br><hr>";
      $pessoa[0] = new Pessoa();
      print_r($pessoa[0]);
      
      echo "<br><hr>";
      $aluno[0] = new Aluno();
      $aluno[0]->setNome("Manuela");
      $aluno[0]->setMatr(042151043);
      $aluno[0]->setCurso("Sistemas de Informação");
      $aluno[0]->cancelarMatr();
      print_r($aluno[0]);

      echo "<br><hr>";
      $professor[0] = new Professor();
      $professor[0]->setNome("Prof. Lucas");
      $professor[0]->setEspecialidade("JavaScript");
      $professor[0]->setSalario(2000);
      $professor[0]->receberAumento(1000);
      print_r($professor[0]);

      echo "<br><hr>";
      $funcionario[0] = new Funcionario();
      $funcionario[0]->setNome("Sr. Miranda");
      $funcionario[0]->setSetor("CPD");
      $funcionario[0]->setTrabalhando(true);
      $funcionario[0]->mudarTrabalho();
      print_r($funcionario[0]);


    ?>
  </pre>
</body>
</html>