<?php

//Importação das classes, Enums e serviços

require __DIR__ . "/src/Model/Conta.php";
require __DIR__ . "/src/Model/ContaCorrente.php";
require __DIR__ . "/src/Model/ContaPopuanca.php";
require __DIR__ . "/src/Model/TipoTransacao.php";
require __DIR__ . "/src/Model/Transacao.php";
require __DIR__ . "/src/Services/FormatadorDeExtrato.php";

//Instanciação da conta com os valores diretos

$conta = newContaCorrente("Prentys Assis", 1000);

echo "****** Bem vindo ao Banco EEPSAS ******\n";
echo "Titular: . $conta->nomeTitular .\n";

do {

echo "\n== Menu Principal ==\n";
echo "1. Consultar saldo atual.\n";
echo "2. Sacar valor.\n";
echo "3. Depositar valor.\n";
echo "4. Ver Extrato Detalhado.\n";
echo "5. Sair.\n\n";
echo "Escola uma opção.\n";

switch ($opcao) {
    case 1:
        echo "\n Saldo atual: R$ " . $conta->getSaldo() . "\n";
        break;

    case 2: 
        echo "\n Qual valor deseja sacar? ";
        $valor = (float) fgets (STDIN);

        if ($conta->sacar($valor)) {
            echo "Saldo realizado com sucesso.";
        } else {
            echo "Erro: Saldo insuficiente ou valor inválido.";
        }
        break;

    case 3: 
        echo "\n Qual valor deseja depositar? ";
        $valor = (float) fgets (STDIN);

        if ($conta->depositar($valor)) {
            echo "Depósito realizado com sucesso.";
        } else {
            echo "O valor do depósito deve ser positivo.";
        }
        break;
        
    case 4:
        echo"\n=== Extrato Bancário ===\n";
        $extratoBruto = $conta->getExtrato();

        $formatador = new FormatadorDeExtrato();
        echo $formatador->formatar($extratoBruto);

        echo"\nSaldo atual: R$ " . $conta->getSaldo() . "\n";
        echo "==================================";

        break;

    case 5:  
        echo "Encerramento do sistema... Adeus!\n";
        break;

    deafult: 
        echo "Opção inválida. Tente novamente. \n";
        break;
        
    } 

} while ($opcao != 5);