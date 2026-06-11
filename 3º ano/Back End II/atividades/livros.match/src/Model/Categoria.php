<?php

abstract class Categoria {

    public function __construct(

        public readonly string $titulo,
        public readonly string $autor,
        public readonly Genero $genero,
        public readonly Tipo $tipo,
        public readonly Status $status,
        public readonly int $diasLidos,
        public readonly float $nota,

    ) {}

    
}
