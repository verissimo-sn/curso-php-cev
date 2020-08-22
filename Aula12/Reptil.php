<?php

require_once "Animal.php";

class Reptil extends Animal {
  private $corEscama;

  //implementando metodos abstratos
  function locomover() {
    echo "<p>Rastejando</p>";
  }

  function alimentar() {
    echo "<p>Comendo vegetais</p>";
  }

  function emitirSom() {
    echo "<p>Som de Reptil</p>";
  }

  //getter setter
  function getCorEscama() {
    return $this->corPelo;
  }
  function setCorEscama($corPelo) {
    $this->corPelo = $corPelo;
  }
}