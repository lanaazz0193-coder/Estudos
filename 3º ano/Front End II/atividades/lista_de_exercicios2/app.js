//EXERCÍCIO 1

function ex01() {

    let titulo = document.querySelector('h1');
    titulo.innerHTML = 'Hora do Desafio.';

    //muda o conteúdo da tag h1
}

//EXERCÍCIO 2

function ex02() {
    
    console.log('O botão foi clicado.');

}

//EXERCÍCIO 3

function ex03() {

    alert("Eu DETESTO js");
}

//EXERCÍCIO 4

function ex04() {

    let cidade = prompt("Digite o nome de uma cidade brasileira: ");
    alert(`Estive em ${cidade} e lembrei de você.`);

}

//EXERCÍCIO 5

function ex05() {

    let v1 = prompt ("Valor 1: ");
    let v2 = prompt ("Valor 2: ");

    let n1 = parseInt(v1);
    let n2 = parseInt(v2)

    let soma = ((n1) + (n2));

    alert(`A soma de ${n1} e ${n2} é igual a ${soma}.`);

}

//EXERCÍCIO 6

function ex06() {
    
    console.log('Olá mundo.');

}

//EXERCÍCIO 7

function ex07() {
    
    let nome = document.getElementById('input_ex07').value;
    
    console.log(`Olá ${nome}.`);

}

//EXERCÍCIO 8

function ex08() {

    let numero = document.getElementById('input_ex08').value;
    let dobro = numero * numero;

    let resultado = document.getElementById('resultado_ex08');
    resultado.innerHTML = (`Dobro de ${numero} = ${dobro}`);

}

//EXERCÍCIO 9

function ex09() {

    let n1 = parseInt(document.getElementById('input_ex09_1').value);
    let n2 = parseInt(document.getElementById('input_ex09_2').value);
    let n3 = parseInt(document.getElementById('input_ex09_3').value);

    let media = (n1 + n2 + n3) / 3;

    let resultado = document.getElementById('resultado_ex09');
    resultado.innerHTML = (`Média: ${media}`);

}

//EXERCÍCIO 10

function ex10() {

    let n1 = parseInt(document.getElementById('input_ex10_1').value);
    let n2 = parseInt(document.getElementById('input_ex10_2').value);

    if (n1 > n2) {

        let resultado = document.getElementById('resultado_ex10');
        resultado.innerHTML = (`Maior: ${n1}`);

    } else {

        let resultado = document.getElementById('resultado_ex10');
        resultado.innerHTML = (`Maior: ${n2}`);
        
    }
}

//EXERCÍCIO 11

function ex11() {

    let numero = document.getElementById('input_ex11').value;
    let multiplicacao = numero * numero;

    let resultado = document.getElementById('resultado_ex11');
    resultado.innerHTML = multiplicacao;

}

//EXERCÍCIO 12

function ex12() {

    let altura = parseFloat(document.getElementById('input_ex12_1'). value);
    let peso = parseFloat(document.getElementById('input_ex12_2'). value);

    let imc = peso / (altura * altura);

    let resultado = document.getElementById('resultado_ex12');
    resultado.innerHTML = (`IMC: ${imc}`);

    //console.log(imc);
    //alert (`${altura}, ${peso}`);

}

//EXERCÍCIO 13 PENDENTE!!!!!!!!!!!!!

function ex13() {

    let numero = parseInt(document.getElementById('input_ex13').value);

    for(i = numero; i >= 0; i--){ 

        numero = numero * (numero - i);

    }

    let resultado = document.getElementById('resultado_ex13');
    resultado.innerHTML = (`Fatorial = ${numero}`)

}

//EXERCÍCIO 14

function ex14() {

    let valorDolar = parseFloat(document.getElementById('input_ex14'). value);
    let valorReal = valorDolar * 4.80;

    let resultado = document.getElementById('resultado_ex14');
    resultado.innerHTML = (`Valor em R$: ${valorReal}`);

}

//EXERCÍCIO 15

function ex15() {

    let altura = parseFloat(document.getElementById('input_ex15_1').value);
    let largura= parseFloat(document.getElementById('input_ex15_2'). value);

    let area = altura * largura;
    let perimetro = (altura * 2) + (largura * 2);

    let resultado1 = document.getElementById('resultado_ex15_1');
    resultado1.innerHTML = (`Área: ${area}m².`);

    let resultado2 = document.getElementById('resultado_ex15_2');
    resultado2.innerHTML = (`Perímetro: ${perimetro} metros.`);

}

//EXERCÍCIO 16 

function ex16() {

    let raio = parseFloat(document.getElementById('input_ex16').value);

    //considerando pi como 3,14 

    let area = 3.14 * (raio * raio);
    let perimetro = 2 * (3.14 * raio);

    let resultado1 = document.getElementById('resultado_ex16_1');
    resultado1.innerHTML = (`Área: ${area}m².`);

    let resultado2 = document.getElementById('resultado_ex16_2');
    resultado2.innerHTML = (`Perímetro: ${perimetro} metros.`);

}

//EXERCÍCIO 17

function ex17() {

    let numero = parseInt(document.getElementById('input_ex17').value);
    
    //for (let i = 1; i <= 10; i++) {

    //console.log(`${numero} x ${i} = ${numero * i}`);

    //let resultado = document.getElementById('resultado_ex17');
    //resultado.innerHTML = (`Tabuada: ${numero} x ${i} = ${numero * i}`);


    //}

    let resultado1 = document.getElementById('resultado_ex17_1');
    resultado1.innerHTML = (`${numero} x 1 = ${numero * 1}`);

    let resultado2 = document.getElementById('resultado_ex17_2');
    resultado2.innerHTML = (`${numero} x 2 = ${numero * 2}`);

    let resultado3 = document.getElementById('resultado_ex17_3');
    resultado3.innerHTML = (`${numero} x 3 = ${numero * 3}`);

    let resultado4 = document.getElementById('resultado_ex17_4');
    resultado4.innerHTML = (`${numero} x 4 = ${numero * 4}`);

    let resultado5 = document.getElementById('resultado_ex17_5');
    resultado5.innerHTML = (`${numero} x 5 = ${numero * 5}`);

    let resultado6 = document.getElementById('resultado_ex17_6');
    resultado6.innerHTML = (`${numero} x 6 = ${numero * 6}`);

    let resultado7 = document.getElementById('resultado_ex17_7');
    resultado7.innerHTML = (`${numero} x 7 = ${numero * 7}`);

    let resultado8 = document.getElementById('resultado_ex17_8');
    resultado8.innerHTML = (`${numero} x 8 = ${numero * 8}`);

    let resultado9 = document.getElementById('resultado_ex17_9');
    resultado9.innerHTML = (`${numero} x 9 = ${numero * 9}`);

    let resultado10 = document.getElementById('resultado_ex17_10');
    resultado10.innerHTML = (`${numero} x 10 = ${numero * 10}`);
    
}



