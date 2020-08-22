<?php

require_once "iVideo.php";

class Video implements iVideo {
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  function __construct($titulo) {
    $this->titulo = $titulo;
    $this->setAvaliacao(1);
    $this->setViews(0);
    $this->setCurtidas(0);
    $this->setReproduzindo(false);
  }

  function play() {
    if (!($this->reproduzindo)) {
      $this->setReproduzindo(true);
      echo "<p>PLAY!</p>";
    } else {
      echo "<p>O video já está reproduzindo</p>";
    }
  }

  function pause() {
    if ($this->reproduzindo) {
      $this->setReproduzindo(false);
      echo "<p>PAUSE!</p>";
    } else {
      echo "<p>O video já está pausado</p>";
    }
  }

  function like() {
    $this->setAvaliacao($this->getAvaliacao() + 1);
  }


  function getTitulo() {
    return $this->titulo;
  }
  function setTitulo($titulo) {
    return $this->titulo = $titulo;
  }

  function getAvaliacao() {
    return $this->avaliacao;
  }
  function setAvaliacao($avaliacao) {
    return $this->avaliacao = $avaliacao;
  }

  function getViews() {
    return $this->views;
  }
  function setViews($views) {
    return $this->views = $views;
  }

  function getCurtidas() {
    return $this->curtidas;
  }
  function setCurtidas($curtidas) {
    return $this->curtidas = $curtidas;
  }

  function getReproduzindo() {
    return $this->reproduzindo;
  }
  function setReproduzindo($reproduzindo) {
    return $this->reproduzindo = $reproduzindo;
  }
}