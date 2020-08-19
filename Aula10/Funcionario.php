<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa {

  private $setor;
  private $trabalhando;

  function __construct() {

  }

  function mudarTrabalho() {
    $this->setTrabalhando(!$this->getTrabalhando());
  }

  // getter setters
  function getSetor() {
    return $this->setor;
  }
  function setSetor($setor) {
    $this->setor = $setor;
  }

  function getTrabalhando() {
    return $this->trabalhando;
  }
  function setTrabalhando($trabalhando) {
    $this->trabalhando = $trabalhando;
  }
}