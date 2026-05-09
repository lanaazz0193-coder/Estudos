<?php

class Smartphone extends Produto {

    public function __construct(

        string $nome,
        float $precoBase,
        CategoriaEletronico $categoria,
        public readonly int $qtdAcessorios

    ) {

        return parent::__construct(

            $nome,
            $precoBase,
            $categoria,
            
        );
    }

    public function calcularTaxaEnvio(): float {
        return $this->qtdAcessorios * 15;
    }
}
