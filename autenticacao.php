<?php

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor =  new Diretor(
  nome: 'João da Silva', 
  cpf: new CPF(numero: '123.543.234.23'), 
  salario: 10000
);

$autenticador->tentaLogin($umDiretor, senha: '4321');