<?php

class FechamentoDeCaixa
{

    private float $totalDaBandeja = 0;

    public function registrarItem(ItemCardapio $nomeProduto): void
    {
        $this->totalDaBandeja += $nomeProduto->calcularPrecoFinal();
    }

    public function getTotal(): float
    {

        return $this->totalDaBandeja;
    }
}
