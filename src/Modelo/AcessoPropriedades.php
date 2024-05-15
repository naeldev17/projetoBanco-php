<?php

namespace Projeto\Banco\Modelo;

trait AcessoPropriedades
{
  public function __get(string $nomeAtributo)
  {
    $metodo = 'recupera' . ucfirst($nomeAtributo);
    return $this->metodo();
  }
}
