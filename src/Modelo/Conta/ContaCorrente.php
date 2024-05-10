<?php

namespace Projeto\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
  protected function percentualTarifa(): float
  {
    return 0.05;
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      print("Saldo indisponivel");
      return;
    }
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }

}
