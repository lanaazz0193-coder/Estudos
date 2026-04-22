<?php

$lista = ['yasmin', 'ana', 'vitoria'];

function ordem($lista){

    sort($lista);    
    return $lista;
}

var_dump (ordem($lista));
