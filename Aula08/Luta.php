<?php

require_once 'lutador.php';

class Luta {

  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  public function marvarLuta($lutador1, $lutador2) {
    if(($lutador1.getCategoria() == $lutador2.getCategoria()) && ($lutador1 != $lutador2)) {
      $this->aprovada = true;
      $this->desafiante = $lutador1;
      $this->desafiado = $lutador2;
    }else {
      $this->aprovada = false;
      $this->desafiante = null;
      $this->desafiado = null;
    }
  }

  public function lutar() {
    if($this->aprovada) {
      $this->desafiante->apresentar();
      $this->desafiado->apresentar();
      $vencedor = rand(0,2);
      switch ($vencedor) {
        case '0': //empate
          echo "<p>Empate !</p>";
          $this->desafiante->empatarLuta();
          $this->desafiado->empatarLuta();
          break;

        case '1': //desafiante vence;
          echo "<p>O Desafiante" . $this->desafiante->getNome() . "Venceu!</p>";
          $this->desafiante->vencerLuta();
          $this->desafiado->perderLuta();
          break;

        case '2': //desafiado vence;
          echo "<p>O Desafiado" . $this->desafiado->getNome() . "Venceu!</p>";
          $this->desafiante->perderLuta();
          $this->desafiado->vencerLuta();
          break;
      }

    } else {
      echo "<p>Essa luta não pode acontecer</p>";
    }
  }

  
  //getters e setters
  function getDesafiado() {
    return $this->desafiado;
  }
  function setDesafiado($desafiado) {
    $this->desafiado = $desafiado;
  }

  function getDesafiante() {
    return $this->desafiante;
  }
  function setDesafiante($desafiante) {
    $this->desafiante = $desafiante;
  }

  function getRounds() {
    return $this->rounds;
  }
  function setRounds($rounds) {
    $this->rounds = $rounds;
  }

  function getAprovada() {
    return $this->aprovada;
  }

  function setAprovada($aprovada) {
    $this->aprovada = $aprovada;
  }
}