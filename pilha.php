<?php

function funcao1()
{
  print 'Entrei na funcao 1' . PHP_EOL;
  try {
    funcao2();
  } catch (Throwable $problema) {
  print $problema->getMessage() . PHP_EOL;    
    print $problema->getLine() . PHP_EOL;
    print $problema->getTraceAsString() . PHP_EOL;

  }
  print 'Entrei na funcao 1' . PHP_EOL;
}

function funcao2()
{
  print 'Entrei na funcao 2' . PHP_EOL;
 
  $exception = new RuntimeException();
  throw $exception;

  print 'Saindo da funçao 2' . PHP_EOL;
}

print 'Inicializando o programa principal' . PHP_EOL;
funcao1();
print 'Finalizando o programa principal' . PHP_EOL;

