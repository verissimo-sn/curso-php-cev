<?php

class Pessoa {

  private $nome;
  private $idade;
  private $sexo;

  function fazerAniv() {
    $this->setIdade($this->getIdade() + 1);
    echo "Parabéns pelo seu dia, hoje vc completa ".$this->getIdade();
  }

  // getters e setters
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