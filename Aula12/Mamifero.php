<?php

require_once "Animal.php";

class Mamifero extends Animal {
  private $corPelo;

  //implementando metodos abstratos
  function locomover() {
    echo "<p>Correndo</p>";
  }

  function alimentar() {
    echo "<p>Mamando</p>";
  }

  function emitirSom() {
    echo "<p>Som de Mamifero</p>";
  }

  //getter setter
  function getCorPelo() {
    return $this->corPelo;
  }
  function setCorPelo($corPelo) {
    $this->corPelo = $corPelo;
  }
}