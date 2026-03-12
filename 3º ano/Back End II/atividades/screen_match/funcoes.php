<?php

function exibeMensagemLancamento(int $ano): void {

    if ($ano > 2022) {
        echo "Lançamento!\n";
    }
    elseif ($ano > 2020 && $ano <= 2000) {
        echo "Ainda é novo.\n";
    }
    else {
        echo "O filme é antigo.\n";
    }

}

function incluidoNoPlano(bool $planoPrime, int $ano): bool {
    return $planoPrime || $ano <= 2000;
}