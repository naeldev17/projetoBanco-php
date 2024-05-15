<?php

use Projeto\Banco\Modelo\Conta\Endereco;

require_once 'autolado.php';

$umEndereco = new Endereco(cidade: 'Acreuna', bairro: 'núria', rua: 'Minha rua', numero: '43D');
$outroEndereco = new Endereco(cidade: 'Rio', bairro: 'centro', rua: 'bird', numero: '54V');
 
print $umEndereco . PHP_EOL;  
print $outroEndereco;  