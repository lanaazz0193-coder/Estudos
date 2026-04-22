<?php

abstract class Titulo {

    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,){
    $this->notas = [];
    }
    //Métodos (Funções)
    public function avaliar(float $nota) : void { //Método Setter
        $this->notas[] = $nota;
    }

    public function media(): float{

        $somaDeNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaDeNotas / $quantidadeDeNotas;
    }

    abstract public function duracaoEmMinutos();
}