<?php

class Caneta {
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  function rabiscar() {
    if(!($this->tampada)) {
      echo "Estou rabiscando...";
    } else {
      echo "Destampe a caneta antes de rabiscar";
    }
  }

  function tampar() {
    $this->tampada= true;
  }

  function destampar() {
    $this->tampada = false;
  }
}