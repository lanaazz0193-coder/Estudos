<?php

class Lanche extends ItemCardapio
{

    public function __construct(

        string $nomeProduto,
        TamanhoPorcao $tamanho,
        public readonly int $qtdCarnes

    ) {

        parent::__construct(

            $nomeProduto,
            $tamanho
        );
    }

    public function calcularPrecoFinal(): float
    {
        return $this->qtdCarnes * 1;
    }
}
