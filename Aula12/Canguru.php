<?php

require_once "Mamifero.php";

class Canguru extends Mamifero {

  //Metodos Especiais
  function usarBolsa() {
    echo "usando bolsa";
  }
  
  function locomover() {
    echo "<p>Saltando</p>";
  }
}