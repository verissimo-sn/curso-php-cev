<?php

require_once "Animal.php";

class Peixe extends Animal {
  private $corEscama;

  //metodo especial
  function soltarBolha() {
    echo "<p>Soltando Bolhas</p>";
  }

  //implementando metodos abstratos
  function locomover() {
    echo "<p>Nadar</p>";
  }

  function alimentar() {
    echo "<p>Comendo algas</p>";
  }

  function emitirSom() {
    echo "<p>Som de Peixe</p>";
  }

  //getter setter
  function getCorEscama() {
    return $this->corPelo;
  }
  function setCorEscama($corPelo) {
    $this->corPelo = $corPelo;
  }
}