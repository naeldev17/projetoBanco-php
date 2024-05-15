<?php

// require_once '/home/ipeweb/source/php-estudos/avancado.ex/Livro.php';


require_once 'autoloadz.php';

use Projeto\Atividade\Livro;
use Projeto\Atividade\Produto;

// $livro = new Livro();
// $livro->setTitulo("O Senhor dos Anéis");
// $livro->setAutor("J.R.R. Tolkien");
// $livro->setAno("1954");
// $livro->imprimirInformacoes();

// print "\n";

// $livro2 = new Livro();
// $livro2->setTitulo("O Hobbit");
// $livro2->setAutor("J.R.R Tolkien");
// $livro2->setAno("1937");
// $livro2->imprimirInformacoes();

// print "\n";

$produto = new Produto("produto:", 60, "desconto:", 20); 
$percentualDesconto = 20;
$precoFinal = $produto->getDesconto($percentualDesconto);
$produto->setNome("Maçã");
$produto->setPreco(60);
$produto->setCategoria("Alimento");
$produto->imprimeInformacoes();

print "\n";

$produto2 = new Produto("produto:", 80, "desconto:", 20);
$percentualDesconto = 20;
$precoFinal = $produto->getDesconto($percentualDesconto);
$produto2->setNome("Relógio");
$produto2->setPreco(80);
$produto2->setCategoria("Acessório");
$produto2->imprimeInformacoes();

print "\n";

$produto3 = new Produto("produto:", 120, "desconto:", 20);
$percentualDesconto = 20;
$precoFinal = $produto->getDesconto($percentualDesconto);
$produto3->setNome("Camiseta");
$produto3->setPreco(120);
$produto3->setCategoria("Vestimenta");
$produto3->imprimeInformacoes();

print "\n";
