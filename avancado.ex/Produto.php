<?php

class Produto
{
  public string $nome;
  public string $preco;
  public string $categoria;

  function getNome(): string {
    return $this->nome;
  }

  function setNome(string $nome): void {
    $this->nome = $nome;
  }

}

$produto = new Produto();
$produto->setNome("Maçã");
// $produto->preco = "7.50";
// $produto->categoria = "Alimento";
// $produto->;

print $produto->getNome() . PHP_EOL;
