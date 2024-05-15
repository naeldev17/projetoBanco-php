<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\{CPF};
use Projeto\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};
use Projeto\Banco\Service\ControladorDeBonificadores;

$umFuncionario = new Desenvolvedor(
  nome: 'Nael D',
  cpf: new CPF(numero: '123.456.789-10'),
  salario: 1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
  nome: 'Pati',
  cpf: new CPF(numero: '453.326.654-40'),
  salario: 3000
);

$umDiretor = new Diretor (
  nome: 'Ana Paula',
  cpf: new CPF(numero: '123.421.432-12'),
  salario: 5000
);

$umEditor = new EditorVideo(
  nome: 'Paulo',
  cpf: new CPF(numero: '232.123.453-23'),
  salario: 1500
);

$controlador = new ControladorDeBonificadores();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

