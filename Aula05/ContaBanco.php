<?php

require 'cliente.php';

public class ContaBanco {
  public $numConta;
  protected $tipo;
  public $dono;
  private $saldo;
  public $status;

  public class contaBanco() {
    this->setSaldo(0);
    this->setStatus(false);

  }

  public function abrirConta($tipo) {
    $this->setTipo($tipo);
    $this->setStatus(true);

    if($tipo == "CC" || $tipo == "cc") {
      $this->setSaldo(50);
    } elseif ($tipo == "CP" || $tipo == "cp") {
      $this->setSaldo(20);
    }
  }

  public function fecharConta() {
    if ($this->getSaldo() > 0) {
      echo "<p>Não é possível fechar uma conta com saldo diferente de Zero</p>";
    }elseif {
      echo "<p>Não foi possível realizar esta operação, sua conta está com saldo negativo</p>"
    } else {
      $this->setStatus(false);
    }
  }

  public function depositar($valor) {
    if($this->getStatus() {
      $this->setSaldo($this->getSaldo() + $valor);
    } else {
      echo "<p>Essa conta está fechada ou não existe. Verifique os dados e tente novamente</p>";
    }
  }

  public function sacar($valor) {
    if($this->getStatus()) {
      if ($this->getSaldo() < $valor) {
        echo "<p>Seu saldo é insuficiante</p>"
      } else {
        $this->setSaldo($this->getSaldo() - $valor);
        echo "<p>valor <?=$valor;?> sacado com sucesso</p>"
      }
    } else {
      echo "<p>Essa conta está fechada ou não existe. Verifique os dados e tente novamente</p>";
    }
  }

  public function taxaTransacao() {
    if($this->getStatus()){
      if($this->getTipo() == "CC" || $this->getTipo() == "cc") {
      $this->setSaldo($this->getSaldo() - 20);

      } else ($this->getTipo() == "CP" || $this->getTipo() == "cp") {
        $this->setSaldo($this->getSaldo() - 20);
      }
    }else {
      echo "<p>Essa conta está fechada ou não existe. Verifique os dados e tente novamente</p>";
    }
    
  }

  public function getNumConta() {
    return $this->numConta;
  }

  public function setNumConta($numConta) {
    return $this->numConta = $numConta;
  }

  public function getTipo() {
    return $this->tipo
  }

  public function setTipo($tipo) {
    return $this->tipo = $tipo;
  }

  public function getDono() {
    return $this->dono
  }

  public function setDono($dono) {
    return $this->dono = $dono;
  }

  public function getSaldo() {
    return $this->saldo
  }

  public function setSaldo($saldo) {
    return $this->saldo = $saldo;
  }

  public function getStatus() {
    return $this->status
  }

  public function setStatus($status) {
    return $this->status = $status;
  }

  // public function getDinheiro() {
  //   return $this->dinheiro;
  // }

  // public function setDinheiro($dinheiro) {
  //   return $this->dinheiro = $dinheiro;
  // }
}