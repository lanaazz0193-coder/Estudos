<?php

abstract class MaterialDidatico {

    public function __construct(

        public readonly string $titulo,
        public readonly int $anoPublicacao,
        public readonly EstadoConseravacao $estado_conseravacao,

    ) {}

    abstract function calcaularDiasEmprestimo() : float;
    
}
