<?php

class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  private $tampada;

  // O metodo construtor ele tbm pode ser criado como mesmo nome da classe(Caneta)
  public function __construct($m, $c, $p) {
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
  }

  public function tampar() {
    return $this->tampada = true;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($m) {
    return $this->modelo = $m;
  }

  public function getPonta() {
    return $this->ponta;
  }

  public function setPonta($p) {
    return $this->ponta = $p;
  }
}