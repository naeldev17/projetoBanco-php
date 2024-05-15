<?php

namespace Projeto\Banco\Modelo;

interface Auntenticavel
{
  public function podeAutenticar(string $senha): bool;
}
