<?php

class VerificadorDeEmprestimos {

    private float $diasEmprestimo = 0;

    public function incluirNoCalculo(MaterialDidatico $material) : void {

        $this->diasEmprestimo += $material->calcaularDiasEmprestimo();

    }

    public function getTotal() : float {

        return $this->diasEmprestimo;

    }
}