<?php

require_once "Pessoa.php";

class Aluno extends Pessoa {
  private $matricula;
  private $curso;

  function __construct() {

  }

  //para a function PagarMensalidade não ser sobreposta, basta transformar o metodo em final.
  //Ex: final function pagarMensalidade.
  //Isso tambem pode ser feito para a classe, fazendo com que ela não possua classes filhas
  //Ex: final class Aluno extends Pessoa{}. Desse modo, nenhuma classe poderá extender de Aluno.
  function pagarMensalidade() {
    echo "<p>Pagando mensalidade do aluno(a) ".$this->getNome()."</P>";
  }

  // getter setter
  function getMatricula() {
    return $this->matricula;
  }
  function setMatricula($matricula) {
    $this->matricula = $matricula;
  }

  function getCurso() {
    return $this->curso;
  }
  function setCurso($curso) {
    $this->curso = $curso;
  }
}