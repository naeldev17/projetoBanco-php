<?php

namespace Projeto\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function sobeDeNivel()
  {
    $this->recebeAumento(valorAumento: $this->recuperaSalario() * 0.75);
  }

  public function calculaBonificacao(): float
  {
    return 500.0;
  }
}
