<?php

class Livro extends MaterialDidatico
{

    public function __construct(

        string $titulo,
        int $anoPublicacao,
        EstadoConseravacao $estadoConseravacao,
        public readonly int $qtdPaginas

    ) {

        parent::__construct(

            $titulo,
            $anoPublicacao,
            $estadoConseravacao,

        );
    }

    public function calcaularDiasEmprestimo(): float{
        return $this->qtdPaginas / 50;
    }
}
