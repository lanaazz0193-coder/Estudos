<?php

require __DIR__ . "/src/Model/EstadoConseravacao.php";
require __DIR__ . "/src/Model/MaterialDidatico.php";
require __DIR__ . "/src/Model/Livro.php";
require __DIR__ . "/src/Model/RevistaCientifica.php";
require __DIR__. "/src/Services/VerificadorDeEmprestimos.php";

$meuLivro = new Livro("LivroX", 2000, EstadoConseravacao::NOVO, 250);
$minhaRevista = new RevistaCientifica("RevistaX", 2000, EstadoConseravacao::GASTO, 6); 

$calculadora = new VerificadorDeEmprestimos();

$calculadora -> incluirNoCalculo($meuLivro);
$calculadora -> incluirNoCalculo($minhaRevista);

echo "Total de dias até a devolução do livro/revista: ". $calculadora->getTotal();

//tem q o calculo com dias exatos? 