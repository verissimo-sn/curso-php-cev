<?php

require_once "Animal.php";

class Ave extends Animal {
  private $corPena;

  //metodo especial
  function fazerNinho() {
    echo "<p>Fazendo Ninho</p>";
  }

  //implementando metodos abstratos
  function locomover() {
    echo "<p>Voando</p>";
  }

  function alimentar() {
    echo "<p>Comendo frutas</p>";
  }

  function emitirSom() {
    echo "<p>Som de Ave</p>";
  }

  //getter setter
  function getCorPena() {
    return $this->corPelo;
  }
  function setCorPena($corPelo) {
    $this->corPelo = $corPelo;
  }
}