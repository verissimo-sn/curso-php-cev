<?php

require_once 'controlador.php';

class ControleRemoto implements Controlador {
  private $volume;
  private $ligado;
  private $tocando;

  //construtor
  function ControleRemoto() {
    $this->setLigado(false);
    $this->setVolume(50);
    $this->setTocando(false);
  }

  //getters e setters
  private function getVolume() {
    return $this->volume;
  }

  private function setVolume($volume) {
    $this->volume = $volume;
  }

  private function getLigado() {
    return $this->ligado;
  }

  private function setLigado($ligado) {
    $this->ligado = $ligado;
  }

  private function getTocando() {
    return $this->tocando;
  }
  
  private function setTocando($tocando) {
    $this->tocando = $tocando;
  }

  //implementar metodos abstratos

  public function ligar() {
    $this->setLigado(true);
  }

  public function desligar() {
    $this->setLigado(false);
  }

  public function abrirMenu() {
    echo "<br>Está ligado?: ".($this->getLigado()?"sim":"não");
    echo "<br>Está tocando?: ".($this->getTocando()?"sim":"não");
    echo "<br>Volume: ".($this->getVolume());
    
    for($i=0; $i<=$this->getVolume(); $i+=10) {
      echo "|";
    }
    echo "<br>";
  }

  public function fecharMenu() {
    echo "Fechando MENU";
  }

  public function maisVolume() {
    if($this->getLigado()) {
      $this->setVolume($this->getVolume() + 5);
    } else {
      echo "Ligue o controle";
    }
  }

  public function menosVolume() {
    if($this->getLigado()) {
      $this->setVolume($this->getVolume() - 5);
    } else {
      echo "Ligue o controle";
    }
  }

  public function ligarMudo() {
    if($this->getLigado() && $this->getVolume() > 0) {
      $this->setVolume(0);
    }
  }

  public function desligarMudo() {
    if($this->getLigado() && $this->getVolume() == 0) {
      $this->setVolume(50);
    }
  }

  public function play() {
    if($this->getLigado() && ($this->getTocando() == "false")) {
      $this->setTocando(true);
      echo "Tocando !";
    }
  }

  public function pause() {
    if($this->getLigado() && ($this->getTocando())) {
      $this->setTocando(false);
      echo "Pausado !";
    }
  }

}