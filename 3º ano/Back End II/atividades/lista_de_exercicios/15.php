<?php

function tFahrenheit($c){

    $fahrenheit = ($c * (9/5)) + 32; 
    return $fahrenheit;

}

echo "Digite a temperatura em celsius:";
$c = (float) fgets (STDIN);

echo tFahrenheit($c);