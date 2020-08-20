<?php

require_once "Aluno.php";

class Tecnico extends Aluno {
  private $registroProfissioanl;

  function __construct() {

  }

  function praticar() {
    echo "<p>Aluno ".$this->getNome()." do curso ".$this->getCurso()." está fazendo aula prática</p>";
  }

  function getRegistroProfissioanl() {
    return $this->registroProfissioanl;
  }
  function setRegistroProfissioanl($registroProfissioanl) {
    $this->registroProfissioanl = $registroProfissioanl;
  }
}