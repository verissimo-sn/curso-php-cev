<?php

require_once "Aluno.php";

class Bolsista extends Aluno {
  private $bolsa;

  function __construct() {

  }

  function renovarBolsa() {
    echo "<P>Bolsa do aluno(a) ".$this->getNome()." renovada com sucesso</p>";
  }
  
  //sobrepondo function pagarMensalidade() da SuperClasse Aluno.
  function pagarMensalidade() {
    echo "<P>O aluno(a) ".$this->getNome()." é bolsista e tem desconto de ".$this->getBolsa()."%</p>";
  }

  function getBolsa() {
    return $this->bolsa;
  }
  function setBolsa($bolsa) {
    $this->bolsa = $bolsa;
  }
}