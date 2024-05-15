<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Modelo\Autenticavel;

class Autenticador
{
  public function tentaLogin(Autenticavel $autenticavel, string $senha): void
  {
    if ($autenticavel->podeAutenticar($senha)) {
      print "Ok. Usuário logado no sistema";
    } else {
      print "Ops. Senha incorreta.";
    }
  }
}
