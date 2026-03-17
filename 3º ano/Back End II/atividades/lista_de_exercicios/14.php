<?php

function imc ($peso, $altura){

    $imc = $peso / ($altura * $altura);
    return $imc;

}

echo imc(50, 1.54);