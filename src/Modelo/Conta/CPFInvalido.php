<?php

namespace Projeto\Banco\Modelo\Conta;

class CPFInvalido extends \DomainException
{
  public function __construct()
  {
    $mensagem = 'CPF inválido';
    parent::__construct($mensagem);
  }
}

// Função para verificar se um CPF é válido
function verificarCPF($cpf)
{
  // Verificar se o CPF é inválido
  if ($cpf === '123.456.789-00') {
    throw new CPFInvalido();
  }
}

try {
  // Chamada da função que poderia lançar a exceção CPFInvalido
  verificarCPF('123.456.789-00');
} catch (CPFInvalido $exception) {
  print $exception->getMessage(); // Imprime "CPF inválido"
}
