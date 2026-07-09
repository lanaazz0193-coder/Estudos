<?php

class RevistaCientifica extends MaterialDidatico {

public function __construct(

        string $titulo,
        int $anoPublicacao,
        EstadoConseravacao $estadoConseravacao,
        public readonly int $qtdArtigos

    ) {

        parent::__construct(

            $titulo,
            $anoPublicacao,
            $estadoConseravacao,

        );
    }

    public function calcaularDiasEmprestimo(): float{
        return $this->qtdArtigos / 2;
    }

}