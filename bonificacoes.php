<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\{CPF, Funcionario};
use Projeto\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
  nome: 'Nael',
  new CPF(numero: '123.456.789-10'),
  cargo: 'Desenvolvedor',
  salario: 1000
);

$umaFuncionaria = new Funcionario(
  nome: 'Pati',
  new CPF(numero: '453.326.654-40'),
  cargo: 'Gerente',
  salario: 3000
);

$umDiretor = new Diretor (
  nome: 'Ana Paula',
  new CPF(numero: '123.421.432-12'),
  cargo: 'Diretor',
  salario: 5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
