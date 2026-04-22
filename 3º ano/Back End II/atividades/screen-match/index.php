<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Services/CalculadoraMaratonas.php";

echo "Bem-vindo ao Screen Match\n";

$filme1 = new Filme ( //novo objeto para a classe filme
    'Thor Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme1->avaliar(7); 
$filme1->avaliar(9);

echo $filme1->nome . "\n";
echo $filme1->media() . "\n";

$serie1 = new Serie ( //novo objeto para a classe filme
    'The Office',
    2005,
    Genero::Comédia,
    9,
    22,
    40,
);

$serie1->avaliar(10); 
$serie1->avaliar(8);

echo $serie1->nome . "\n";
echo $serie1->media() . "\n";

$maratona1= new CalculadoraMaratonas();
$maratona1->incluir($filme1);
$maratona1->incluir($serie1);

$duracao = $maratona1->duracao();

echo "A maratona irá durar $duracao minutos.";