<?php

require __DIR__ . "/src/Model/TamanhoPorcao.php";
require __DIR__ . "/src/Model/ItemCardapio.php";
require __DIR__ . "/src/Model/Lanche.php";
require __DIR__ . "/src/Model/Bebida.php";
require __DIR__ . "/src/Services/FechamentoDeCaixa.php";

$meuLanche = new Lanche("LancheX", TamanhoPorcao::PEQUENO, 2);
$minhaBebida = new Bebida("BEbidaX", TamanhoPorcao::GRANDE, 100);

$calculadora = new FechamentoDeCaixa;

$calculadora->registrarItem($meuLanche);
$calculadora->registrarItem($minhaBebida);

echo "O valor total é R$" . $calculadora->getTotal();