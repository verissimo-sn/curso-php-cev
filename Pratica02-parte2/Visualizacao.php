<?php

require_once "Gafanhoto.php";
require_once "Video.php";

class Visualizacao {
  private $espectador;
  private $filme;

  function __construct($espectador, $filme) {
    $this->espectador = $espectador;
    $this->filme = $filme;

    $this->filme->setViews($this->video->getViews() + 1);
    $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
  }

  function avaliar() {

  }

  function getEspectador() {
    return $this->espectador;
  }
  function setEspectador($espectador) {
    $this->espectador = $espectador;
  }

  function getFilme() {
    return $this->filme;
  }
  function setFilme($filme) {
    $this->filme = $filme;
  }
}