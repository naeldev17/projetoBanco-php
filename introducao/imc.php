<?php 

$altura = 1.67; 
$peso = 60;

$imc = $peso / $altura * $altura;

print "o imc da pessoa esta {$imc}\n";

if ($imc < 18) {
  print"abaixo\n";
} else if ($imc < 25) {
  print"dentro\n";
} else {
  print "acima";
}
