<?php

class Livro
{
  public string $titulo;  
  public string $autor;
  public string $ano;

  public function recuperaLivro(): void {
    $this->titulo;
  }
}

// $titulo = 'A Salvação'; 
$titulo = new Livro('A Salvação');
print $titulo;
$autor = 'Robert L.';
$ano = '2013';
