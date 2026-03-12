<?php

echo("\nDigite seu peso (em kg): ");
$peso = (float) fgets (STDIN);

echo("\nDigite sua altura (em m): ");
$altura = (float) fgets (STDIN);

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "De acordo com o IMC você esta: Abaixo do peso.";
    }   
elseif ($imc >= 18.5 && $imc <= 29.9){
    echo "De acordo com o IMC você esta: Com peso ideal.";
    }
elseif ($imc >= 30 && $imc <= 39.9){
    echo "De acordo com o IMC você esta: Com peso ideal.";
    }
else {
    echo "De acordo com o IMC você esta: Com obesidade grave";
}
