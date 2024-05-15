<?php

namespace Projeto\Atividade;

class Produto
{
  private string $nome;
  private float $preco;
  private float $desconto;
  private string $categoria;
  private string $percentualDesconto;


  public function __construct(string $nome, float $preco, string $categoria, float $percentualDesconto)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->categoria = $categoria;
    $this->percentualDesconto = $percentualDesconto;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getPreco(): float
  {
    return $this->preco;
  }

  public function setPreco(float $preco): void
  {
    $this->preco = $preco;
  }
  
  public function getCategoria(): string
  {
    return $this->categoria;
  }

  public function setCategoria(string $categoria): void
  {
    $this->categoria = $categoria;
  }

  public function getPercentualDesconto(): float
  {
    return $this->percentualDesconto;
  }

  public function setPercentualDesconto(float $percentualDesconto): void
  {
    $this->percentualDesconto = $percentualDesconto;
  }

  public function getDesconto(): float
  {
    return ($this->preco * $this->percentualDesconto) / 100;
  }

  public function aplicarDesconto(): float
  {
    return $this->preco - $this->getDesconto();
  }

  public function imprimeInformacoes(): void
  {
    $precoComDesconto = $this->aplicarDesconto();
    $desconto = $this->getDesconto();
    print "O nome do produto é: '{$this->getNome()}', o preço original é '{$this->getPreco()}', com o desconto de {$this->percentualDesconto}% aplicado (valor do desconto: R$ {$desconto}), o preço final é '{$precoComDesconto}', e a sua categoria é: {$this->getCategoria()}\n";
  }
}

// $produto = new Produto();
// $produto->setNome("Maçã");
// $produto->setPreco(60);
// $produto->setCategoria("Alimento");
// $produto->imprimeInformacoes();

// print $produto->getNome() . PHP_EOL;
