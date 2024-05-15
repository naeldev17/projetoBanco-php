<?php

namespace Projeto\Banco\Modelo;

class Pessoa
{
  
  use AcessoPropriedades;

  protected $nome;
  private $cpf;

  public function __construct(string $nome, CPF $cpf)
  {
    $this->validaNome($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function recuperaNome(): string
  {
    return $this->nome;
  }

  public function recuperaCpf(): string
  {
    return $this->cpf->verNumero();
  }

  protected function validaNome(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      print("nome precisa ter mais do que 5 caracteres");
      exit();
    }
  }
}
