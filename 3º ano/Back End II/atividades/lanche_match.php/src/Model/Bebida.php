<?php

class Bebida extends ItemCardapio {

    PUBLIC function __construct(

        string $nomeProduto,
        TamanhoPorcao $tamanho,
        public readonly int $mlVoume
        
    ) {
        parent::__construct(

            $nomeProduto,
            $tamanho
        );
    }

    public function calcularPrecoFinal(): float {

        return $this->mlVoume * 1;
    }
        
}

