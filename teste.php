<?php

// use Projeto\Banco\Modelo\Conta\Conta;
// use Projeto\Banco\Modelo\Conta\Titular;
// use Projeto\Banco\Modelo\CPF;
// use Projeto\Banco\Modelo\Conta\Endereco;

use Projeto\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Projeto\Banco\Modelo\Conta\{CPF, Endereco};
// use Projeto\Banco\Modelo\CPF;
// use Projeto\Banco\Modelo\Conta\Conta;
// use Projeto\Banco\Modelo\Conta\ContaPoupanca;
// use Projeto\Banco\Modelo\Conta\ContaCorrente;


require_once 'autoload.php';

$conta = new ContaCorrente(
  new Titular(
    cpf: new CPF(numero: '123.322.343-12'),
    nome: 'Nael B',
    endereco: new Endereco(cidade: 'Acreúna', bairro: 'bairro Teste', rua: 'Rua lá', numero: '37'),
  ),
);

$conta->transfere();
$conta->depositar(valorADepositar: 500);
$conta->sacar(valorASacar: 100);