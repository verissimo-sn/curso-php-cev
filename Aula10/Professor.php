<?php

require_once "Pessoa.php";

class Professor extends Pessoa {

  private $especialidade;
  private $salario;

  function __construct() {

  }

  function receberAumento($aumento) {
    $this->setSalario($this->getSalario() + $aumento);
    echo "Salario atual é de ".$this->getSalario();
  }

  // getter setters
  function getEspecialidade() {
    return $this->especialidade;
  }
  function setEspecialidade($especialidade) {
    $this->especialidade = $especialidade;
  }

  function getSalario() {
    return $this->salario;
  }
  function setSalario($salario) {
    $this->salario = $salario;
  }
}