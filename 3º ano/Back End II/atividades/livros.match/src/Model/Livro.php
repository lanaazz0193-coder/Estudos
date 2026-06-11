<?php

class Livro extends Categoria {

    public function __construct(
        
        string $titulo,
        string $autor,
        Genero $genero,
        Tipo $tipo,
        Status $status,
        int $diasLidos,
        float $nota,
        public readonly int $qtddPaginas

    ) {

    parent:: __construct(

        $titulo,
        $autor,
        $genero,
        $tipo,
        $status,
        $diasLidos,
        $nota,

    );

    }
}