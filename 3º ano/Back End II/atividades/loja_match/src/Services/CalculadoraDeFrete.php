<?php

class CalculadoraDeFrete {
    
    private float $calcularFrete = 0;

    public function incluirNoCalculo(Produto $produto) : void {

        $this->calcularFrete += $produto->calcularTaxaEnvio();

    }

    public function getTotal() : float {

        return $this->calcularFrete;

    }
}