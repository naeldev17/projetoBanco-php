<?php

namespace Projeto\Atividade;

class Carro
{

  private string $modelo;
  private string $placa;
  private string $ano;

  public function defineModelo(string $modelo): void
  {
    if ($modelo != strtoupper($modelo)) {
      $modelo = strtoupper($modelo);
    }
    $this->modelo = $modelo;
  }

  public function pegarModelo(): string
  {
    return $this->modelo;
  }

  public function definePlaca(string $placa): void
  {
    $placa = preg_replace("/[^\w\d]/", "", $placa);
    if ($placa != strtoupper($placa)) {
      $placa = strtoupper($placa);
    }
    $this->placa = $placa;
    if (strlen($placa) > 7) {
      print("Erro, tamanho da placa excedido") . PHP_EOL;
      exit();
    }
  }

  public function pegarPlaca(): string
  {
    return $this->placa;
  }

  public function defineAno(string $ano)
  {
    $ano = preg_replace("/[^0-9]/", "", $ano);

    if ($ano === "" || strlen($ano) > 4) {
      echo "Ano digitado incorreto" . PHP_EOL;
      exit();
    }
    $this->ano = $ano;
  }

  public function pegarAno(): string
  {
    return $this->ano;
  }
}

$carro = new Carro();
$carro->defineModelo("ford");
$carro->definePlaca("Fv3D32c");
$carro->defineAno("2023");
print ($carro->pegarModelo()) . PHP_EOL;
print ($carro->pegarPlaca()) . PHP_EOL;
print ($carro->pegarAno()) . PHP_EOL;

print "\n";

$carro1 = new Carro();
$carro1->defineModelo("gol");
$carro1->definePlaca("3er4Fas");
$carro1->defineAno("2000");
print $carro1->pegarModelo() . PHP_EOL;
print $carro1->pegarPlaca() . PHP_EOL;
print $carro1->pegarAno() . PHP_EOL;

print "\n";

$carro2 = new Carro();
$carro2->defineModelo("ferrari");
$carro2->definePlaca("21sfe32");
$carro2->defineAno("2012");
print $carro2->pegarModelo() . PHP_EOL;
print $carro2->pegarPlaca() . PHP_EOL;
print $carro2->pegarAno() . PHP_EOL;

print "\n";

$carro3 = new Carro();
$carro3->defineModelo("fusca");
$carro3->definePlaca("sad-21e3");
$carro3->defineAno("2007");
print $carro3->pegarModelo() . PHP_EOL;
print $carro3->pegarPlaca() . PHP_EOL;
print $carro3->pegarAno() . PHP_EOL;

