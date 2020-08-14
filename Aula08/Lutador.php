<?php

class Lutador {
  private $nome;
  private $nacionalidade;
  private $idade, $altura, $peso;
  private $categoria, $vitorias, $derrotas, $empates;

  //construtor
  function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
    $this->nome = $nome;
    $this->nacionalidade = $nacionalidade;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->setPeso($peso);
    $this->vitorias = $vitorias;
    $this->derrotas = $derrotas;
    $this->empates = $empates;

  }

  //metodos
  public function apresentar() {
    echo "<p>---------------------------------------------</p><br>";
    echo "<p>Lutador: " . $this->getNome() . "</p><br>";
    echo "<p>Origem: " . $this->getNacionalidade() . "</p><br>";
    echo "<p>Idade: " . $this->getIdade() . "</p><br>";
    echo "<p>Altura: " . $this->getAltura() . "</p><br>";
    echo "<p>Pesando: " . $this->getPeso() . "</p><br>";
    echo "<p>Ganhou: " . $this->getVitorias() . "Lutas</p> <br>";
    echo "<p>Perdeu: " . $this->getDerrotas() . "Lutas</p> <br>";
    echo "<p>Empatou: " . $this->getEmpates() . "Lutas</p> <br>";
  }

  public function status() {
    echo "<p>---------------------------------------------</p><br>";
    echo "<p>Lutador - " . $this->getNome() . "</p><br>";
    echo "<p>É de peso: " . $this->getCategoria() . "</p><br>";
    echo "<p>Cartel: " . $this->getVitorias() . "/" . $this->getDerrotas(). "/". $this->getEmpates() . "</p>";
  }

  public function ganharLuta() {
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta() {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta() {
    $this->setEmpates($this->getEmpates() + 1);
  }

  //getter e setter

  public function getNome() {
    return $this->nome;
  }
  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNacionalidade() {
    return $this->nacionalidade;
  }
  public function setNacionalidade($nacionalidade) {
    $this->nacionalidade = $nacionalidade;
  }

  public function getIdade() {
    return $this->idade;
  }
  public function setIdade($idade) {
    $this->idade = $idade;
  }

  public function getAltura() {
    return $this->altura;
  }
  public function setAltura($altura) {
    $this->altura = $altura;
  }

  public function getPeso() {
    return $this->peso;
  }
  public function setPeso($peso) {
    $this->peso = $peso;
    $this->setCategoria();
  }

  public function getCategoria() {
    return $this->categoria;
  }
  private function setCategoria() {
    if($this->peso < 52.2){
      $this->categoria = "invalido";
    }elseif($this->peso <= 70.3) {
      $this->categoria = "leve";
    }elseif($this->peso <= 83.9) {
      $this->categoria = "medio";
    }elseif($this->peso <= 120.2) {
      $this->categoria = "pesado";
    } else {
      $this->categoria = "invalido";
    }
  }

  public function getVitorias() {
    return $this->vitorias;
  }
  public function setVitorias($vitorias) {
    $this->vitorias = $vitorias;
  }

  public function getDerrotas() {
    return $this->derrotas;
  }
  public function setDerrotas($derrotas) {
    $this->derrotas = $derrotas;
  }

  public function getEmpates() {
    return $this->empates;
  }
  public function setEmpates($empates) {
    $this->empates = $empates;
  }

}