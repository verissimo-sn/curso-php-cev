<?php

class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar() {
    if(!($this->tampada)) {
      echo "Estou rabiscando...";
    } else {
      echo "Destampe a caneta antes de rabiscar";
    }
  }

  private function tampar() {
    $this->tampada= true;
  }

  public function destampar() {
    $this->tampada = false;
  }
}