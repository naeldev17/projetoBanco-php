<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Modelo\Funcionario;

class ControladorDeBonificadores
{
  private $totalBonificacao = 0;
  public function adicionaBonificacaoDe(Funcionario $funcionario) {
    $this->totalBonificacao += $funcionario->calculaBonificacao();
  }

  public function recuperaTotal(): float {
    return $this->totalBonificacoes; 
  }
}
