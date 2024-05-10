<?php

namespace Projeto\Banco\Modelo;

class CPF
{

  private $numero;

  function __construct(string $numero)
  {

    $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
      ]
    ]);

    if ($numero === false) {
      echo "Cpf invÃ¡lido";
      exit();
    }
    $this->numero = $numero;
  }

  public function verNumero(): string
  {
    return $this->numero;
  }
}
