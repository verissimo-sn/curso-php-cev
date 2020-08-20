<?php

abstract class Pessoa {
  private $nome;
  private $idade;
  private $sexo;

  function __construct() {

  }

  final function fazerAniversario() {
    $this->setIdade($this->getIdade() + 1);
    echo "Parabens pelo seu Aniversário";
  }

  // getters setters
  function getNome() {
    return $this->nome;
  }
  function setNome($nome) {
    $this->nome = $nome;
  }

  function getIdade() {
    return $this->idade;
  }
  function setIdade($idade) {
    $this->idade = $idade;
  }

  function getSexo() {
    return $this->sexo;
  }
  function setSexo($sexo) {
    $this->sexo = $sexo;
  }
}