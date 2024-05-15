<?php

// require_once 'php-estudos/avancado.ex/Livro.php';
require_once 'autoloadz.php';

$livro = new Livro();
$livro->setTitulo("O Senhor dos Anéis");
$livro->setAutor("J.R.R. Tolkien");
$livro->setAno("1954");
$livro->setDescricao("O Senhor dos Anéis é uma saga épica escrita por J.R.R. Tolkien que narra a jornada de um grupo de personagens em um mundo de fantasia chamado Terra Média, em uma busca para destruir um anel mágico que pode conceder poder ilimitado ao seu possuidor e que ameaça corromper tudo o que é bom.");
$livro->imprimirInformacoes();

print "\n";

$livro2 = new Livro();
$livro2->setTitulo("O Hobbit");
$livro2->setAutor("J.R.R Tolkien");
$livro2->setAno("1937");
$livro2->setDescricao("O Hobbit é um livro também escrito por J.R.R. Tolkien e se passa na Terra Média, antes dos eventos de O Senhor dos Anéis. Ele conta a história de Bilbo Bolseiro, um hobbit que é arrastado em uma aventura inesperada por Gandalf, o mago, e um grupo de anões, em busca de um tesouro guardado por um dragão chamado Smaug.");
$livro2->imprimirInformacoes();
