<?php

require __DIR__ . '/src/Model/CategoriaEletronico.php';
require __DIR__ . '/src/Model/Produto.php';
require __DIR__ . '/src/Model/Smartphone.php';
require __DIR__ . '/src/Model/Geladeira.php';
require __DIR__ . '/src/Services/CalculadoraDeFrete.php';

$meuSmartphone = new Smartphone("CelularX", 1000, CategoriaEletronico::INFORMATICA, 2);

$minhaGeladeria = new Geladeira("GeladeiraY", 1000, CategoriaEletronico::ELETRODOMESTICO, 12);

$calcularFrete = new CalculadoraDeFrete();

$calcularFrete -> incluirNoCalculo($meuSmartphone);
$calcularFrete -> incluirNoCalculo($minhaGeladeria);

echo "Total de impostos a pagar da frota: R$ ". $calcularFrete->getTotal();