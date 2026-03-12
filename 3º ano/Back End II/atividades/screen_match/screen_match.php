<?php

require __DIR__. "/funcoes.php";

echo "\nBem Vindo ao Screen Match!\n";

    $nomeFilme = "Thor Ragnarok";
    $anoDeLancamento = 2022;

    $genero = match ($nomeFilme) {
        "Top Gun - Maverick" => "Ação",
        "Thor Ragnarok" => "Super-Herói",
        "Se Beber Não Case" => "Comédia",
        default => "Desconhecido",
    };

    $quantidadeDeNotas = ($argc - 1) > 0 ? ($argc - 1) : 1; //evita divisão por zero com operador ternário

    $notas = [];

    for($contador = 1; $contador < $argc; $contador += 1) {

        $notas[] = (float) $argv[$contador];

    };

    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
    
    $planoPrime = true;
    $incluidoNoPlano = incluidoNoPlano(false, 2020);
    
    echo "Nome do filme: " .$nomeFilme. "\n";
    echo "Nota do filme: $notaFilme\n";
    echo "Ano de lançamento : $anoDeLancamento\n";
    echo "Incluido no plano: $incluidoNoPlano\n";

    exibeMensagemLancamento(2026);    

    echo "Gênero do filme: $genero\n";

    $filme = [

        "nome" => "Thor: Ragnarok",
        "anoLancamento" => "2021",
        "nota" => "7.5",
        "genero" => "Super-Herói"

    ];

    echo $filme['anoLancamento'] . "\n\n";

    //var_dump($notas);
    //sort($notas);
    //var_dump($notas);
    //$menorNota = min($notas);

    //echo($menorNota);

    var_dump($filme['nome']);

    $posicaoDoisPontos = strpos($filme['nome'], ':');
    var_dump($posicaoDoisPontos);
    var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));