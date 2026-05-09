<?php

$saldo = 1000;

echo "********************\n";
echo "Titular: Prentys Assis\n";
echo "Saldo atual: $saldo\n";
echo "********************\n";

do {

echo "\n\n1. Consultar saldo atual\n";
echo "2. Sacar valor\n";
echo "3. Depositar valor\n";
echo "4. Sair\n\n";

$opcao = (float) fgets (STDIN);
    
switch ($opcao) {

    case 1:
        echo "\nO valor do saldo é R$$saldo\n";

        break;

    case 2:
        echo "\nQual valor deseja sacar?\n";

        $valorSaque = (float) fgets (STDIN);

        if ($valorSaque > $saldo) {
            echo "Não é possível sacar este valor.\n";

        } else {     
            $saldo -= $valorSaque;
            echo "\nO seu novo saldo é R$$saldo\n";
        }
        
        break;

    case 3: 
        echo "\nQual valor deseja depositar?\n";

        $valorDeposito = (float) fgets (STDIN);

        if ($valorDeposito < 0) {
            echo "Não é possível depositar este valor.\n";
        } else {
            $saldo += $valorDeposito;
            echo "\nO novo saldo é R$$saldo\n";
        }

        break;

    case 4:
        echo "Adeus.\n";
        break;

    default: 
        echo "Opção inválida\n";
}

} while ($opcao != 4);