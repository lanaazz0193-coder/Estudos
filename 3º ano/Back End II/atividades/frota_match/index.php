<?php

require __DIR__ . '/src/Model/TipoCombustivel.php';
require __DIR__ . '/src/Model/Veiculo.php';
require __DIR__ . '/src/Model/Carro.php';
require __DIR__ . '/src/Model/Onibus.php';
require __DIR__ . '/src/Services/CalculadoraDeIPVA.php';

$meuCarro = new Carro ("Fiat", "Uno", "2020", TipoCombustivel::GASOLINA, 5);
$meuOnibus = new Onibus("Mercedez-Benz", "O500", 2018, TipoCombustivel::DIESEL, 4);

$calculadora = new CalculadoraDeIPVA();

$calculadora->incluirNoCalculo($meuCarro);
$calculadora->incluirNoCalculo($meuOnibus);

echo "Total de impostos a pagar da frota: R$ ". $calculadora->getTotal();

