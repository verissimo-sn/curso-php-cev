<?php

require_once "Pessoa.php";

class Aluno extends Pessoa {

  private $matr;
  private $curso;

  function __construct() {

  }

  function cancelarMatr() {
    echo "Matricula Cancelada. Entre em contato com o financeiro da Faculdade";
  }

  // getter setters
  function getMatr() {
    return $this->matr;
  }
  function setMatr($matr) {
    $this->matr = $matr;
  }

  function getCurso() {
    return $this->curso;
  }
  function setCurso($curso) {
    $this->curso = $curso;
  }
}