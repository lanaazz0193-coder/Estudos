<?php

class Geladeira extends Produto {

    public function __construct(

        string $nome,
        float $precoBase,
        CategoriaEletronico $categoria,
        public readonly int $qtdMesesGarantia

    ) {

        return parent::__construct(

            $nome,
            $precoBase,
            $categoria,
            
        );
    }

    public function calcularTaxaEnvio(): float {
        return $this->qtdMesesGarantia * 50;
    }
}
