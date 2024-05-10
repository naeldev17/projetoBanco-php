<?php

$array = [
	'carros' => [
		[
			'nome' => 'golf',
			'valor' => 200000,
		],
		[
			'nome' => 'gol',
			'valor' => 20000
		],
		[
			'nome' => 'corsa',
			'valor' => 100000
		]
	],
	'garagem' => [
		[
			'dono' => 'leo',
			'carros' => [
				[
					'nome' => 'pollo',
					'valor' => 90000
				],
				[
					'nome' => 'jeta',
					'valor' => 120000
				],
			]
		],
		[
			'dono' => 'marta',
			'carros' => [
				[
					'nome' => 'fusca',
					'valor' => 30000
				],
				[
					'nome' => 'civic',
					'valor' => 100000
				]
			]
		]
	]
];

$garagem = $array['garagem'];

foreach ($garagem as $dono) {
	print "Nome do dono: {$dono['dono']}\n";
	foreach ($dono['carros'] as $carro) {
		print "Carro: {$carro['nome']} - Valor: {$carro['valor']}\n";
	}
}

function calculaValorCarros($carros) {
	$valor = 0;
	foreach ($carros as $carro) {
		$valor += $carro['valor'];
	}
	return $valor;
}

foreach ($array['garagem'] as $dono) {
	$valor = calculaValorCarros($dono['carros']);
	print "Valor total dos carros de {$dono['dono']}: $valor\n";
}

		// foreach ($array['carros'] as $indice => $value) {
		//   print "Nome do carro: {$value['nome']} - Valor do carro: {$value['valor']}\n";
		// }
		// print $array['carros'][0]['nome'];
		
		
		// $carros = $array['carros'];
		
		// for ($i = 0; $i < count($carros); $i++) {
		// $carro = $carros[$i];
		// print "Nome do carro: {$carro['nome']} - Valor do carro: {$carro['valor']}\n";
		// print $array['carros'][$i]['nome'];
		// }
