<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\Conta\Endereco;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Conta\Conta;
use Projeto\Banco\Modelo\Conta\ContaPoupanca;

// use Projeto\Modelo\Titular;
// use Projeto\Modelo\Conta\Conta;

$endereco = new Endereco(cidade: 'Petrópolis', bairro: 'um bairro', rua: 'minha rua', numero: '71B');
$leticia = new Titular(new CPF(numero: '193.384.455-33'), nome: 'Leticia', endereco: $endereco);
$primeiraConta = new Conta($leticia);
$primeiraConta->depositar(valorADepositar: 500);
$primeiraConta->sacar(valorASacar: 300);

print($primeiraConta->recuperaNomeTitular()) . PHP_EOL;
print($primeiraConta->recuperarSaldo()) . PHP_EOL;
print($primeiraConta->recuperaCpfTitular()) . PHP_EOL;

$outroEndereco = new Endereco(cidade: 'A', bairro: 'b', rua: 'c', numero: '1D');
$vinicius = new Titular(new CPF(numero: '223.321.234-23'), nome: 'Vinicius', endereco: $endereco);
// $outra = new Conta(new Titular(new CPF(numero: '223.321.234-23'), nome: 'Vinicius', $outroEndereco));
$segundaConta = new Conta($vinicius);
var_dump($segundaConta);
// unset($segundaConta);0