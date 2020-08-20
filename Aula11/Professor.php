<?php

require_once "Pessoa.php";

class Professor extends Pessoa {
  private $especialidade;
  private $salario;
  
  
  function __construct() {

  }

  function receberAumento($aumento) {
    $this->setSalario($this->getSalario() + $aumento);
    echo "<p>O professor ".$this->getNome()." recebeu aumento de $aumento reais</p>";
    echo "<p>Valor final do salario é de ".$this->getSalario()." reais</p>";
  }
  
  function getEspecialdiade() {
    return $this->especialdiade;
  }
  function setEspecialidade($especialidade) {
    $this->especialidade = $especialidade;
  }

  function getsalario() {
    return $this->salario;
  }
  function setSalario($salario) {
    $this->salario = $salario;
  }
}