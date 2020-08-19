<?php

require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  function __construct($titulo, $autor, $totPaginas, $leitor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPaginas = $totPaginas;
    $this->pagAtual = 0;
    $this->aberto = false;
    $this->leitor = $leitor;
  }

  function detalhes() {
    echo "Livro ".$this->getTitulo()." Escrito por ".$this->getAutor();
    echo "<br> Total de Páginas ".$this->getTotPaginas()." Atual ".$this->getPagAtual();
    echo "<br> Sendo lido por ".$this->leitor->getNome();
  }

  //metodos abstratos
  function abrir() {
    $this->setAberto(true);
  }

  function fechar() {
    $this->setAberto(false);
  }

  function folhear($pagina) {
    if($pagina>$this->getTotPaginas()) {
      $this->setPagAtual(0);
    } else {
      $this->setPagAtual($pagina);
    }
  }

  function avancarPag() {
    $this->setPagAtual($this->getPagAtual() + 1);
  }

  function voltarPag() {
    $this->setPagAtual($this->getPagAtual() - 1);
  }


  //getters e setters
  function getTitulo() {
    return $this->titulo;
  }
  function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  function getAutor() {
    return $this->autor;
  }
  function setAutor($autor) {
    $this->$autor = $autor;
  }

  function getTotPaginas() {
    return $this->totPaginas;
  }
  function setTotPaginas($totPaginas) {
    $this->totPaginas = $totPaginas;
  }

  function getPagAtual() {
    return $this->pagAtual;
  }
  function setPagAtual($pagAtual) {
    $this->pagAtual = $pagAtual;
  }

  function getAberto() {
    return $this->aberto;
  }
  function setAberto($aberto) {
    $this->aberto = $aberto;
  }

  function getLeitor() {
    return $this->leitor;
  }
  function setLeitor($leitor) {
    $this->leitor = $leitor;
  }
}