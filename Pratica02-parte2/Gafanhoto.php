<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa {
  private $login;
  private $totalAssistido;

  function __construct($nome, $idade, $sexo, $login) {
    parent::__construct($idade, $nome, $sexo);
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->login = $login;
    $this->setTotalAssistido(0);

  }

  function viuMaisUm() {
    $this->setTotalAssistido($this->getTotalAssistido() + 1);
  }

  function getLogin() {
    return $this->login;
  }
  function setLogin($login) {
    $this->login = $login;
  }
  

  function getTotalAssistido() {
    return $this->totalAssistido;
  }
  function setTotalAssistido($totalAssistido) {
    $this->totalAssistido = $totalAssistido;
  }
}