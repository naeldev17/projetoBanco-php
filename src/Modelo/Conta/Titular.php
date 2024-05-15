<?php

namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Conta\Endereco;
use Projeto\Banco\Modelo\Autenticavel;


class Titular extends Pessoa implements Autenticavel
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

  public function podeAutenticar(string $senha): bool {
    return $senha === 'abc';
  }
}
