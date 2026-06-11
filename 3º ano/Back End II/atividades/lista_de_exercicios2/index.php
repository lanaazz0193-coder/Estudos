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

    echo "A soma de $n1 e $n2 é igual a " . $n1 + $n2;
}

//EXERCÍCIO 5

function ex5()
{
    $n1 = readline("Digite a primeira nota: ");
    $n2 = readline("Digite a segunda nota: ");

    echo "A média entre $n1 e $n2 é igual a " . ($n1 + $n2) / 2;
}

//EXERCÍCIO 6

function ex6()
{
    $numero = readline("Digite um número: ");

    echo "O antecessor de $numero é " . $numero - 1 . " e o sucessor é " . $numero + 1;
}

//EXERCÍCIO 7

function ex7()
{
    $numero = readline("Digite um número: ");

    echo "O dobro de $numero é " . $numero + $numero . " e a terça parte é " . $numero / 3;
}

//EXERCÍCIO 8

function ex8()
{
    $metros = readline("Digite uma distância em metros: ");

    echo "A distância de $metros metro(s) corresponde a: \n";
    echo $metros / 1000 . " Km\n";
    echo $metros / 100 . " hm\n";
    echo $metros / 10 . " dam\n";
    echo $metros * 10 . " dm\n";
    echo $metros * 100 . " cm\n";
    echo $metros * 1000 . " mm\n";
}

//EXERCÍCIO 9

function ex9()
{
    define('Dolar', 3.45);

    $real = readline("Digite o valor disponível em sua carteira: ");

    echo "Com R$$real é possível comprar " . $real / Dolar . " doláres.";
}

//EXERCÍCIO 10

function ex10()
{
    $altura = readline("Digite a altura da parede: ");
    $largura = readline("Digite a largura da parede: ");

    echo "A área total a ser pintada é de " . $altura * $largura . " m², para isso serão necessários " . ($altura * $largura) / 2 . " litros de tinta.";
}

//EXERCÍCIO 11

function ex11()
{

    $a = readline("Digite o valor de A: ");
    $b = readline("Digite o valor de B: ");
    $c = readline("Digite o valor de C: ");

    echo "O valor de Delta é " . ($b * $b) - 4 * $a * $c;
}

//EXERCÍCIO 12

function ex12()
{

    $precoProduto = readline("Digite o preço do produto: R$");

    echo "O preço final com 5% de desconto é RS" . $precoProduto - ($precoProduto * (5 / 100));
}

//EXERCÍCIO 13

function ex13()
{

    $salarioInical = readline("Digite o valor do seu salário: ");

    $valorSalarioAumento = $salarioInical + ($salarioInical * (15 / 100));

    echo "O valor do novo salário com aumento é R$" . $salarioInical + ($salarioInical * (15 / 100));
}

//EXERCÍCIO 14

function ex14()
{

    define('valorDiaria', 90);

    $kmPercorridos = readline("Digite quantos quilômetros foram percorridos: ");
    $diasAlugados = readline("Digite a quantidade de dias em que o veículo foi alugado: ");

    echo "O valor total a ser pago por $diasAlugados dias e $kmPercorridos percorridos, é R$" . (valorDiaria * $diasAlugados) + ($kmPercorridos * 0.20);
}

//EXERCÍCIO 15

function ex15()
{

    define('valorDiaTrabalhado', 8 * 25);

    $diasTrabalhados = readline("Quantos dias foram trabalhados no mês? ");


    echo "O valor total a ser recebido por $diasTrabalhados dias trabalhados é R$", $diasTrabalhados * valorDiaTrabalhado;
}

//EXERCÍCIO 16

function ex16()
{

    $cigarrosPorDia = readline("Quantos cigarros você fuma por dia? ");
    $quantidadeAnos = readline("A quantos anos você fuma? ");

    echo "Fumando $cigarrosPorDia cigarros por dia durante $quantidadeAnos anos, seu tempo de vida foi reduzido em " . (((($cigarrosPorDia * 365) * $quantidadeAnos) * 10) / 60) / 24 . " dias.";
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

    if (($n1 + $n2) / 2 >= 7) {
        echo "$nome teve um bom aproveitamento, com " . ($n1 + $n2) / 2 . " pontos.";
    } else {
        echo "$nome não teve um bom aproveitamento, com " . ($n1 + $n2) / 2 . " pontos.";
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
        echo "Olá $nome, Feliz Dia das Mulheres! O valor das suas compras com desconto de 13% é de R$" . $valorCompras - ($valorCompras * (13 / 100));
    } else {
        echo "Olá $nome, o valor das suas compras com o desconto de 5% é R$" . $valorCompras - ($valorCompras * (5 / 100));
    }
}

//EXERCÍCIO 24

function ex24()
{

    $km = readline("Quantos Km deseja percorrer? ");

    if ($km <= 200) {
        echo "O valor da passagem para percorrer $km Km é R$" . $km * 0.5;
    } else {
        echo "O valor da passagem para percorrer $km Km é R$" . $km * 0.45;
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

    if (($n1 + $n2) / 2 >= 7) {
        echo "APROVADO";
    } elseif (($n1 + $n2) / 2 >= 5) {
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

    if ($altura * $largura > 500) {
        echo "TERRENO VIP";
    } elseif ($altura * $largura >= 100) {
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
        echo "O novo salário do funcionário, com o reajuste de 20%, é de R$" . $salario = $salario + ($salario * (20 / 100));
    } elseif ($anosDeTrabalho > 3) {
        echo "O novo salário do funcionário, com o reajuste de 12.5%, é de R$" . $salario = $salario + ($salario * (12.5 / 100));
    } else {
        echo "O novo salário do funcionário, com o reajuste de 3%, é de R$" . $salario + ($salario * (3 / 100));
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

function ex33()
{

    $valorCasa = readline("Digite o valor da casa: ");
    $salario = readline("Digite o salário do comprador: ");
    $anos = readline("Em quantos anos a casa a casa será paga? ");

    if ($valorCasa / ($anos * 12) > ($salario * (30 / 100))) {
        echo "Não é possível fazer o empréstimo, pois o valor da prestação excede 30% do salário do comprador.";
    } else {
        echo "É possível fazer o empréstimo, o valor das prestações será de R$" . $valorCasa / ($anos * 12);
    }
}

//EXERCÍCIO 34

function ex34()
{

    $peso = readline("Digite seu peso: ");
    $altura = readline("Digite sua altura: ");

    if (($peso / $altura * $altura) > 40) {
        echo "Obesidade mórbida";
    } elseif (($peso / $altura * $altura) >= 30) {
        echo "Obesidade";
    } elseif (($peso / $altura * $altura) >= 25) {
        echo "Sobrepeso";
    } elseif (($peso / $altura * $altura) >= 18.5) {
        echo "Peso Ideal";
    } else {
        echo "Abaixo do peso";
    }
}

//EXERCÍCIO 35

function ex35()
{

    define('Popular', 90);
    define('Luxo', 150);

    $modalidadeCarro = readline("O carro é popular ou de luxo (p para popular e l para luxuoso)? ");

    $diasAlugados = readline("Por quantos dias o caro foi alugado? ");

    $kmRodados = readline("Quantos quilômetros foram percorridos? ");

    if ($modalidadeCarro == "p" && $kmRodados <= 100) {

        echo "O valor total a ser pago é R$" . (Popular * $diasAlugados) + $kmRodados * 0.20;
    } elseif ($modalidadeCarro == "p" && $kmRodados > 100) {

        echo "O valor total a ser pago é R$" . (Popular * $diasAlugados) + $kmRodados * 0.10;
    } elseif ($modalidadeCarro == "l" && $kmRodados <= 100) {

        echo "O valor total a ser pago é R$" . (Luxo * $diasAlugados) + $kmRodados * 0.30;
    } elseif ($modalidadeCarro == "l" && $kmRodados > 100) {

        echo "O valor total a ser pago é R$" . (Luxo * $diasAlugados) + $kmRodados * 0.25;
    }
}

//EXERCÍCIO 36

function ex36()
{


    $horasPraticadas =  readline("Quantas horas de atividade física você fez no mês? ");

    if ($horasPraticadas <= 10) {

        echo "Com essa quantidade de horas você fez " . $horasPraticadas * 2 . " pontos, que equivalem a R$", ($horasPraticadas * 2) * 0.05;
    } elseif (($horasPraticadas > 10) && ($horasPraticadas <= 20)) {

        echo "Com essa quantidade de horas você fez " . $horasPraticadas * 5 . " pontos, que equivalem a R$", ($horasPraticadas * 5) * 0.05;
    } elseif ($horasPraticadas > 20) {

        echo "Com essa quantidade de horas você fez " . $horasPraticadas * 10 . " pontos, que equivalem a R$", ($horasPraticadas * 10) * 0.05;
    } else {

        echo "Valor Inválido";
    }
}

//EXERCÍCIO 37

function ex37()
{

    $salario = readline("Digite o salário do funcionário: ");
    $genero = readline("Digite o gênero do funcioário (f para feminino e m para masculino): ");
    $anosDeTrabalho = readline("Há quantos anos ele(a) trabalha na empresa? ");

    if (($genero == "f") && ($anosDeTrabalho < 15)) {

        echo "O novo salário da funcionária com o reajuste é de R$" . $salario + ($salario * (5 / 100));
    } elseif (($genero == "f") && ($anosDeTrabalho >= 15 && $anosDeTrabalho <= 20)) {

        echo "O novo salário da funcionária com o reajuste é de R$" . $salario + ($salario * (12 / 100));
    } elseif (($genero == "f") && ($anosDeTrabalho > 20)) {

        echo "O novo salário da funcionária com o reajuste é de R$" . $salario + ($salario * (23 / 100));
    }

    if (($genero == "m") && ($anosDeTrabalho < 20)) {

        echo "O novo salário da funcionária com o reajuste é de R$" . $salario + ($salario * (3 / 100));
    } elseif (($genero == "m") && ($anosDeTrabalho >= 20 && $anosDeTrabalho <= 30)) {

        echo "O novo salário da funcionária com o reajuste é de R$" . $salario + ($salario * (13 / 100));
    } elseif (($genero == "m") && ($anosDeTrabalho > 30)) {

        echo "O novo salário da funcionária com o reajuste é de R$" . $salario + ($salario * (25 / 100));
    }
}

//EXERCÍCIO 38

function ex38()
{

    $i = 6;

    while ($i < 12) {
        echo "$i ";
        $i++;
    }

    echo "Acabou!";
}

//EXERCÍCIO 39

function ex39()
{

    $i = 10;

    while ($i > 2) {
        echo "$i ";
        $i--;
    }

    echo "Acabou!";
}

//EXERCÍCIO 40

function ex40()
{

    $i = 0;

    while ($i < 19) {
        echo "$i ";
        $i += 3;
    }

    echo "Acabou!";
}

//EXERCÍCIO 41

function ex41()
{

    $i = 100;

    while ($i > 0) {

        echo "$i ";
        $i -= 5;
    }

    echo "Acabou!";
}

//EXERCÍCIO 42

function ex42()
{

    $numero = readline("Digite um número: ");

    $i = 1;

    while ($i <= $numero) {

        echo "$i ";
        $i++;
    }

    echo "Acabou!";
}

//EXERCÍCIO 43

function ex43()
{

    $i = 30;

    while ($i >= 1) {

        if ($i % 4 == 0) {

            echo "[$i] ";
        } else {

            echo "$i ";
        }

        $i--;
    }

    echo "Acabou!";
}

//EXERCÍCIO 44

function ex44()
{

    $i = readline("Digite primeiro número: ");
    $f = readline("Digite o segundo número: ");
    $incremento = readline("Digite o incremento: ");

    while ($i <= $f) {

        echo "$i ";
        $i += $incremento;
    }

    echo "Acabou!";
}

//EXERCÍCIO 45

function ex45()
{

    $i = readline("Digite primeiro número: ");
    $f = readline("Digite o segundo número: ");
    $incremento = readline("Digite o incremento: ");

    if ($i > $f) {

        while ($i >= $f) {

            echo "$i ";
            $i -= $incremento;
        }
    } else {

        while ($i <= $f) {

            echo "$i ";
            $i += $incremento;
        }
    }

    echo "Acabou!";
}


//EXERCÍCIO 46

function ex46()
{

    $soma = 0;
    $i = 6;

    while ($i <= 100) {

        $soma += $i;

        echo "$i";

        if ($i < 100) {

            echo " + ";
        } elseif ($i == 100) {

            echo " = $soma";
        }

        $i += 2;
    }

    echo "\nSoma: $soma";
}

//EXERCÍCIO 47 

function ex47()
{

    $soma = 0;
    $i = 500;

    while ($i >= 0) {

        $soma += $i;

        echo "$i";

        if ($i > 0) {

            echo " + ";
        } elseif ($i == 0) {

            echo " = $soma";
        }

        $i -= 50;
    }

    echo "\nSoma: $soma";
}

//EXERCÍCIO 48

function ex48()
{

    $soma = 0;

    $i = 1;

    while ($i <= 7) {

        $numero = readline("Digite um número: ");

        $i++;

        $soma = $soma += $numero;
    }

    echo "A soma dos números é: $soma";
}

//EXERCÍCIO 49

function ex49()
{

    $pares = 0;
    $impares = 0;

    $i = 1;

    while ($i <= 6) {

        $numero = readline("Digite um número: ");

        $i++;

        if ($numero % 2 == 0) {

            $pares = $pares += 1;
        } else {

            $impares = $impares += 1;
        }
    }

    echo ("Pares: $pares \nImpares: $impares");
}

//EXERCÍCIO 50

function ex50() // não ta somando direito os divisiveis por 3
{

    $i = 1;
    $maiores = 0;
    $divisiveis = 0;

    while ($i <= 20) {

        $numero = rand(0, 10);
        echo "$numero, ";

        if ($numero > 5) {

            $maiores = $maiores += 1;
        } elseif ($numero % 3 == 0) {

            $divisiveis = $divisiveis += 1;
        }

        $i++;

        if ($i == 20) {

            echo "$numero. \n";
        }
    }

    echo ("Maiores que 5: $maiores \nDivisíveis por 3: $divisiveis");
}

//EXERCÍCIO 51

function ex51()
{

    $i = 1;

    $preco = 0;
    $menor = $preco;
    $maior = $preco;


    while ($i <= 8) {

        $preco = readline("Digite o valor do produto: ");


        if ($preco < $menor) {

            $menor = $preco;
        } elseif ($preco > $maior) {

            $maior = $preco;
        }

        $i++;
    }

    echo "O maior valor é R$$maior e o menor é R$$menor.";
}

//EXERCÍCIO 52

function ex52()
{

    $soma = 0;
    $maiorIdade = 0;
    $media = 0;
    $menor5 = 0;
    $maior18 = 0;


   for($i = 1; $i <= 10; $i++){

        $idade = readline("Digite a idade da pessoa: ");

        $soma = $soma + $idade;

        if($idade > 18) {

            $maior18 = $maior18 + 1;

        } elseif($idade < 5){

            $menor5 = $menor5 +1;

        }

        if($idade > $maiorIdade){

            $maiorIdade = $idade;

        }

        $media = $soma / 10;
   }

    echo "A média de idade do grupo é $media. \n $maior18 tem mais de 18 anos. \n $menor5 pessoas tem menos de 5 anos. \n $maiorIdade é a maior idade do grupo.";
}

//EXERCÍCIO 53

function ex53() 
{

    $homens = 0;
    $mulheres = 0;
    $soma = 0;
    $media = 0;
    $mediaHomens = 0;
    $mulheres20 = 0;

    for($i = 0; $i <= 5; $i++){

        $genero = readline("Digite o gênero da pessoa: ");
        $idade = readline("Digite a idade da pessoa: ");

        $soma = $soma + $idade;

        if($genero == "f") {

            $mulheres = $mulheres + 1;

        } elseif($genero == "m") {

            $homens = $homens + 1;

        } else {

            echo "Opção inválida.";
        
        }

    }

    echo "$mulheres foram cadastradas. \n$homens foram cadastrados. \n$media é a média de idade do grupo. \n$mediaHomens é a média de idade dos homens do grupo. \n$mulheres20 mulheres tem mais de 20 anos.";

}

//EXERCÍCIO 54

function ex54() 
{

    $media = 0;
    $soma = 0;
    $mais90 = 0;
    $menos50 = 0;
    $mais190 = 0;


    for($i = 1; $i <= 7; $i++){

        $altura = readline("Digite a altura da pessoa: ");
        $peso = readline("Digite o peso da pessoa: ");

        $soma = $soma + $altura;

        if($peso > 90){

            $mais90 = $mais90 += 1;

        }elseif(($peso < 50) && ($altura < 1.60)){

            $menos50 = $menos50 += 1;

        }elseif(($altura > 1.90) && ($peso > 100)){

            $mais190 = $mais190 += 1;
        }

        $media = $soma / 7;
        $i++;

    }

    echo "Média de altura do grupo: $media \nPessoas com mais de 90kg: $mais90 \nPessoas com menos de 50 kg e menos de 1.60: $menos50 \nPessoas com mias de 1.90 e mais de 100kg: $mais190";

}

//EXERCICIO 56 

function ex56(){

    $numero = readline("Digite um número: ");

    while($numero != 1111){

        $numero = readline("Digite outro número: ");

    }

    echo "Acabou!";

}

//EXERCÍCIO 57 

function ex57(){

}