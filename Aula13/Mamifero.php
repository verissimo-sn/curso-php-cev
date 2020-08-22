<?php

require_once "Animal.php";

class Mamifero extends Animal {
  protected $corPelo;

  function emitirSom() {
    echo "<p>Som Mamifero</P>";
  }

  function getCorPelo() {
    return $this->corPelo;
  }
  function setCorPelo($corPelo) {
    $this->corPelo = $corPelo;
  }
}