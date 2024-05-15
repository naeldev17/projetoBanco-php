<?php

use Projeto\Banco\Modelo\Conta\ContaCorrente;
use Projeto\Banco\Modelo\Conta\Endereco;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;

$contaCorrente = new ContaCorrente(
  titular: new Titular(
    new CPF(numero: '123.456.789.12'),
    nome: 'Nathan B',
    endereco: new Endereco(cidade: 'Cidade', bairro: 'bairro', rua: 'rua', numero: 'numero')
  )
);

try {
  $contaCorrente->depositar(valorADepositar: -100);
} catch (InvalidArgumentException $exception) {
  print "Valor a depositar precisa ser positivo";
}
