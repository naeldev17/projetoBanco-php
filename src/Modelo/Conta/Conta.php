<?php

namespace Projeto\Banco\Modelo\Conta;

use Exception;
use Projeto\Banco\Modelo\Conta\SaldoInsuficienteException as ContaSaldoInsuficienteException;
use SaldoInsuficienteException;

abstract class Conta
{
  private Titular $titular;
  protected float $saldo;
  private static $numeroDeContas = 0;

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;
    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    if (self::$numeroDeContas > 2) {
      print("há mais de uma conta ativa");
    }
  }

  public function sacar(float $valorASacar)
  {
    $tarifaSaque = $valorASacar * $this->percentualTarifa();
    $valorSaque = $valorASacar + $tarifaSaque;
    if ($valorASacar > $this->saldo) {
      throw new ContaSaldoInsuficienteException($valorSaque, $this->saldo);
    }
    $this->saldo -= $valorSaque;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      throw new \InvalidArgumentException();
      return;
    }
    $this->saldo += $valorADepositar;
  }
  
  public function recuperarSaldo(): float
  {
    return $this->saldo;
  }

  public function recuperaNomeTitular(): string
  {
    return $this->titular->recuperaNome();
  }

  public function recuperaCpfTitular(): string
  {
    return $this->titular->recuperaCpf();
  }

  public static function recuperaNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }

  abstract function percentualTarifa(): float;
}

// $umaConta = new Conta();

// $umaConta->cpfTitular = '123.321.123-23';
// $umaConta->nomeTitular = 'Ricardo';
// $umaConta->saldo = 300;
// // $umaConta->depositar(100);
// var_dump($umaConta->saldo);

// $segundaConta->cpfTitular = '433.344.132-43';
// $segundaConta->nomeTitular = 'Nathan';
// $segundaConta->saldo = 200;
// $umaConta->transferir(200, $segundaConta);
// var_dump($segundaConta->saldo);
