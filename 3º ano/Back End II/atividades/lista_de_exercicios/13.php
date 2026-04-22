<?php

function funcao (float $n1, float $n2, string $operacao){

    if ($operacao == "soma") {

    $resultado = $n1 + $n2;
        echo"$resultado";

    } elseif ($operacao == "subtração") {

        $resultado = $n1 - $n2;
        echo"$resultado";

    } elseif ($operacao == "multiplicação") {

        $resultado = $n1 * $n2;
        echo"$resultado";

    } else {
        //divisão

        $resultado = $n1 / $n2;
        echo"$resultado";

    }

}

echo funcao(10, 2, "divisão");