<?php

namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Conta\Endereco;

class Titular extends Pessoa
{
  private Endereco $endereco;

  public function __construct(CPF $cpf, string $nome, Endereco $endereco)
  {
    parent::__construct($nome, $cpf);
    $this->endereco = $endereco;
  }

  public function recuperaEndereco(): Endereco
  {
    return $this->endereco;
  }
}
