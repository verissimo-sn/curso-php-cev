<?php

require 'contabanco.php';

class ClienteBanco {
  private $nome;
  private $idade;
  private $genero;
  private $inadimplente;

  public function ClienteBanco($nome, $idade, $genero, $inadimplente) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->genero = $genero;
    $this->inadimplente = $inadimplente;
  }

  public function limparNome() {
    return this->inadimplente = false;
  }

  public function sujarNome() {
    return this->inadimplente = true;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    return this->nome = $nome;
  }

  public function getIdade() {
    return $this->idade;
  }

  public function setIdade($idade) {
    return this->idade = $idade;
  }

  public function getGenero() {
    return $this->genero;
  }

  public function setGenero($genero) {
    return this->genero = $genero;
  }

  public function getInadimplente() {
    return $this->Inadimplente;
  }

  public function setInadimplente($inadimplente) {
    return this->inadimplente = $inadimplente;
  }

}