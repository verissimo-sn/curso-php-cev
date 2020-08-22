<?php

abstract class Animal {
  protected $peso;
  protected $idade;
  protected $membro;

  abstract function emitirSom();

  function getPeso() {
    return $this->peso;
  }
  function setPeso($peso) {
    $this->peso = $peso;
  }

  function getIdade() {
    return $this->idade;
  }
  function setIdade($idade) {
    $this->idade = $idade;
  }

  function getMembro() {
    return $this->membro;
  }
  function setMembro($membro) {
    $this->membro = $membro;
  }
}