<?php

// use Projeto\Banco\Modelo\Conta\Conta;
// use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Conta\Endereco;
use Projeto\Banco\Modelo\Conta\{ContaPoupanca, SaldoInsuficienteException, Titular};
// use Projeto\Banco\Modelo\Conta\{CPF, Endereco};
// use Projeto\Banco\Modelo\CPF;
// use Projeto\Banco\Modelo\Conta\Conta;
// use Projeto\Banco\Modelo\Conta\ContaPoupanca;
// use Projeto\Banco\Modelo\Conta\ContaCorrente;


require_once 'autoload.php';

$conta = new ContaPoupanca(
  new Titular(
    cpf: new CPF(numero: '123.322.343-12'),
    nome: 'Nael B',
    endereco: new Endereco(cidade: 'Acreúna', bairro: 'bairro Teste', rua: 'Rua lá', numero: '37'),
  )
);

$conta->depositar(valorADepositar: 500);

try {
  $conta->sacar(valorASacar: 600);
} catch (SaldoInsuficienteException $exception) {
  print "Você não tem saldo para realizar este saque." . PHP_EOL;
  print $exception->getMessage();
}

$conta->depositar(valorADepositar: 500);
// $conta->sacar(valorASacar: 100);
