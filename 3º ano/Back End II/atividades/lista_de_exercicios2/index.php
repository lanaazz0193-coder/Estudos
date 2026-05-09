<?php

$numero = $argv[1];
$nomeDaFuncao = 'ex' . $numero;

echo "========================================\n";
echo "   Executando o Exercício $numero\n";
echo "========================================\n\n";

$nomeDaFuncao();

echo "\n========================================\n";


// ÁREA DOS EXERCÍCIOS: Funções com a lógica de cada questão
// ==============================================================================

//EXERCÍCIO 1

function ex1()
{
    echo "Olá, Mundo!\n";
}

//EXERCÍCIO 2

function ex2()
{
    $nome = readline("Qual é o seu nome? ");
    echo "Olá $nome, é um prazer te conhecer!\n";
}

//EXERCÍCIO 3

function ex3()
{
    $nome = readline("Qual o seu nome?");
    $salario = readline("Qual o valor do seu salário?");

    echo "Nome: $nome";
    echo "Salário: $salario\n";
    echo "O(a) funcionário(a) $nome tem um salário de R$$salario"; //problema de concatenação
}

//EXERCÍCIO 4

function ex4()
{
    $n1 = readline("Digite um número: ");
    $n2 = readline("Digite outro número: ");

    echo "A soma de $n1 e $n2 é igual a ". $n1 + $n2;
}

//EXERCÍCIO 5

function ex5()
{
    $n1 = readline("Digite a primeira nota: ");
    $n2 = readline("Digite a segunda nota: ");

    $media = ($n1 + $n2) / 2;

    echo "A média entre $n1 e $n2 é igual a $media";
}

//EXERCÍCIO 6

function ex6()
{
    $numero = readline("Digite um número: ");

    $antecessor = $numero - 1;
    $sucessor = $numero + 1;

    echo "O antecessor de $numero é $antecessor e o sucessor é $sucessor";
}

//EXERCÍCIO 7

function ex7()
{
    $numero = readline("Digite um número: ");

    $dobro = $numero + $numero;
    $tercaparte = $numero / 3;

    echo "O dobro de $numero é $dobro e a terça parte é $tercaparte";
}

//EXERCÍCIO 8

function ex8()
{
    $metros = readline("Digite uma distância em metros: ");

    $km = $metros / 1000;
    $hm = $metros / 100;
    $dam = $metros / 10;
    $dm = $metros * 10;
    $cm = $metros * 100;
    $mm = $metros * 1000;

    echo "A distância de $metros metro(s) corresponde a: \n";
    echo "$km Km\n";
    echo "$hm hm\n";
    echo "$dam dam\n";
    echo "$dm dm\n";
    echo "$cm cm\n";
    echo "$mm mm\n";
}

//EXERCÍCIO 9

function ex9()
{
    $real = readline("Digite o valor disponível em sua carteira: ");

    $dolar = $real / 3.45;

    echo "Com R$$real é possível comprar $dolar doláres.";
}

//EXERCÍCIO 10

function ex10()
{
    $altura = readline("Digite a altura da parede: ");

    $largura = readline("Digite a largura da parede: ");

    $area = $altura * $largura;
    $qtddTinta = $area / 2;

    echo "A área total a ser pintada é de $area m², para isso serão necessários $qtddTinta litros de tinta.";
}

//EXERCÍCIO 11

function ex11()
{

    $a = readline("Digite o valor de A: ");
    $b = readline("Digite o valor de B: ");
    $c = readline("Digite o valor de C: ");

    $delta = ($b * $b) - 4 * $a * $c;

    echo "O valor de Delta é $delta";
}

//EXERCÍCIO 12

function ex12()
{

    $precoProduto = readline("Digite o preço do produto: R$");

    $precoPromocional = $precoProduto - ($precoProduto * (5 / 100));

    echo "O preço final com 5% de desconto é RS$precoPromocional";
}

//EXERCÍCIO 13

function ex13()
{

    $salarioInical = readline("Digite o valor do seu salário: ");

    $valorSalarioAumento = $salarioInical + ($salarioInical * (15 / 100));

    echo "O valor do novo salário com aumento é R$$valorSalarioAumento";
}

//EXERCÍCIO 14

function ex14()
{

    $kmPercorridos = readline("Digite quantos quilômetros foram percorridos: ");
    $diasAlugados = readline("Digite a quantidade de dias em que o veículo foi alugado: ");

    $valorTotal = ($diasAlugados * 90) + ($kmPercorridos * 0.20);

    echo "O valor total a ser pago por $diasAlugados dias e $kmPercorridos percorridos, é R$$valorTotal";
}

//EXERCÍCIO 15

function ex15()
{

    $diasTrabalhados = readline("Quantos dias foram trabalhados no mês? ");

    $valorTotal = $diasTrabalhados * (8 * 25);

    echo "O valor total a ser recebido por $diasTrabalhados dias trabalhados é R$$valorTotal";
}

//EXERCÍCIO 16

function ex16()
{

    $cigarrosPorDia = readline("Quantos cigarros você fuma por dia? ");
    $quantidadeAnos = readline("A quantos anos você fuma? ");

    $totalCigarros = ($cigarrosPorDia * 365) * $quantidadeAnos;
    $tempoReduzido = (($totalCigarros * 10) / 60) / 24;

    echo "Fumando $cigarrosPorDia cigarros por dia durante $quantidadeAnos anos, seu tempo de vida foi reduzido em $tempoReduzido dias.";
}

//EXERCÍCIO 17

function ex17()
{

    $velocidade = readline("Digite a velocidade do carro: ");

    if ($velocidade > 80) {
        $valorMulta = ($velocidade - 80) * 5;
        echo "Você foi multado por excesso de velocidade. Em R$$valorMulta.";
    } else {
        echo "Velocidade dentro do limite.";
    }

    //$resultado = ($velocidade > 80) ? "Você foi multado por excesso de velocidade." : "Velocidade dentro do limite.";
    //echo $resultado;
}

//EXERCÍCIO 18

function ex18()
{

    $anoNascimento = readline("Em que ano você nasceu? ");
    $idade = 2026 - $anoNascimento;

    if ($idade >= 16) {
        echo "Você pode votar.";
    } else {
        echo "Você não pode votar.";
    }

    //$resultado = ($idade >= 16) ? "Você pode votar." : "Você não pode votar.";
    //echo $resultado;   
}

//EXERCÍCIO 19

function ex19()
{

    $nome = readline("Qual é o nome do aluno(a)? ");

    $n1 = readline("Digite a primeira nota: ");
    $n2 = readline("Digite a segunda nota: ");

    $media = ($n1 + $n2) / 2;

    if ($media >= 7) {
        echo "$nome teve um bom aproveitamento, com $media pontos.";
    } else {
        echo "$nome não teve um bom aproveitamento, com $media pontos.";
    }

    //$resultado = ($media >= 7) ? "$nome teve um bom aproveitamento, com $media pontos." : "$nome não teve um bom aproveitamento, com $media pontos.";
    //echo $resultado;  

}

//EXERCÍCIO 20 

function ex20()
{

    $numero = readline("Digite um número: ");

    if ($numero % 2 == 0) {
        echo "$numero é um número par.";
    } else {
        echo "$numero é um  npumero ímpar.";
    }

    //$resultado = ($numero % 2 == 0) ? "$numero é um número par." : "$numero é um número ímpar.";
    //echo $resultado; 
}

//EXERCÍCIO 21

function ex21()
{

    $ano = readline("Digite o ano: ");

    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        echo "$ano é um ano bissexto.";
    } else {
        echo "$ano não é um ano bissexto.";
    }

    //$resultado = (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) ? "$ano é um ano bissexto." : "$ano não é um ano bissexto.";
    //echo $resultado; 
}

//EXERCÍCIO 22

function ex22()
{

    $anoNascimento = readline("Digite o ano em que você nasceu: ");

    $idade = 2026 - $anoNascimento;

    if ($idade > 18) {
        $anos = $idade - 18;
        echo "Você pode para se alistar, se passaram $anos ano(s) desde a idade correta para se alistar.";
    } elseif ($idade == 18) {
        echo "Você tem a idade correta para se alistar.";
    } else {
        $anos = 18 - $idade;
        echo "Você não pode se alistar, faltam $anos ano(s) para a idade correta.";
    }
}

//EXERCÍCIO 23

function ex23()
{

    $nome = readline("Qual seu nome? ");
    $genero = readline("Qual seu gênero (f, para feminino. m, para masculino)? ");
    $valorCompras = readline("Qual o valor total das suas compras? R$");

    if ($genero == "f") {
        $valorFinal = $valorCompras - ($valorCompras * (13 / 100));
        echo "Olá $nome, Feliz Dia das Mulheres! O valor das suas compras com desconto de 13% é de R$$valorFinal";
    } else {
        $valorFinal = $valorCompras - ($valorCompras * (5 / 100));
        echo "Olá $nome, o valor das suas compras com o desconto de 5% é R$$valorFinal";
    }
}

//EXERCÍCIO 24

function ex24()
{

    $km = readline("Quantos Km deseja percorrer? ");

    if ($km <= 200) {
        $valorPassagem = $km * 0.5;
        echo "O valor da passagem para percorrer $km Km é R$$valorPassagem";
    } else {
        $valorPassagem = $km * 0.45;
        echo "O valor da passagem para percorrer $km Km é R$$valorPassagem";
    }
}

//EXERCÍCIO 25

function ex25()
{

    $a = readline("Qual o tamanho da primeira reta? ");
    $b = readline("Qual o tamanho da segunda reta? ");
    $c = readline("Qual o tamanho da terceira reta? ");

    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        echo "É possível fazer um triângulo com essas retas.";
    } else {
        echo "Não é possível fazer um triângulo com essas retas.";
    }
}

//EXERCÍCIO 26

function ex26()
{

    $n1 = readline("Digite um número: ");
    $n2 = readline("Digite outro número: ");

    if ($n1 > $n2) {
        echo "$n1 é maior que $n2.";
    } elseif ($n1 < $n2) {
        echo "$n1 é menor que $n2.";
    } else {
        echo "$n1 e $n2 são iguais.";
    }
}

//EXERCÍCIO 27

function ex27()
{

    $n1 = readline("Digite a primeira nota: ");
    $n2 = readline("DIgite a segunda nota:");

    $media = ($n1 + $n2) / 2;

    if ($media >= 7) {
        echo "APROVADO";
    } elseif ($media >= 5) {
        echo "RECUPERAÇÃO";
    } else {
        echo "REPROVADO";
    }
}

//EXERCÍCIO 28

function ex28()
{

    $altura = readline("Qual a altura do terreno? ");
    $largura = readline("QUal a largura do terreno? ");

    $area = $altura * $largura;

    if ($area > 500) {
        echo "TERRENO VIP";
    } elseif ($area >= 100) {
        echo "TERRENO MASTER";
    } else {
        echo "TERRENO POPUPLAR";
    }
}

//EXERCÍCIO 29

function ex29()
{

    $nome = readline("Qual o nome do funcionário? ");
    $salario = readline("Qual o salário do funcionário? R$");
    $anosDeTrabalho = readline("A quantos anos ele trabalha na empresa? ");

    if ($anosDeTrabalho > 10) {
        $salario = $salario + ($salario * (20 / 100));
        echo "O novo salário do funcionário, com o reajuste de 20%, é de R$$salario";
    } elseif ($anosDeTrabalho > 3) {
        $salario = $salario + ($salario * (12.5 / 100));
        echo "O novo salário do funcionário, com o reajuste de 12.5%, é de R$$salario";
    } else {
        $salario = $salario + ($salario * (3 / 100));
        echo "O novo salário do funcionário, com o reajuste de 3%, é de R$$salario";
    }
}

//EXERCÍCIO 30

function ex30()
{

    $a = readline("Qual o tamanho da primeira reta? ");
    $b = readline("Qual o tamanho da segunda reta? ");
    $c = readline("Qual o tamanho da terceira reta? ");

    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        echo "É possível fazer um triângulo com essas retas.";

        if (($a == $b) && ($a == $c)) {
            echo " O triângulo é equilátero.";
        } elseif (($a == $b) || ($b == $c) || ($a == $c)) {
            echo " O triângulo isóceles.";
        } else {
            echo " O triângulo escaleno.";
        }

    } else {
        echo "Não é possível fazer um triângulo com essas retas.";
    }
}

//falta os exs 31 e 32

//EXERCÍCIO 33 

function ex33() {

    $valorCasa = readline("Digite o valor da casa: ");
    $salario = readline("Digite o salário do comprador: ");
    $anos = readline("Em quantos anos a casa a casa será paga? ");

    $valorPrestacao = $valorCasa / ($anos * 12);

    if($valorPrestacao > ($salario * (30/100))){
        echo "Não é possível fazer o empréstimo, pois o valor da prestação excede 30% do seu salário.";
    } else {
        echo "É possível fazer o empréstimo, o valor das prestações será de $valorPrestacao";
    }
}