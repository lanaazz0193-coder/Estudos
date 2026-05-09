//EXERCÍCIO 1

function ex01() {

    let titulo = document.querySelector('h1');
    titulo.textContent = 'Hora do Desafio.';

}

//EXERCÍCIO 2

function ex02() {

    console.log('O botão foi clicado.');

}

//EXERCÍCIO 3

function ex03() {

    //alert("Eu DETESTO js");
    //Detestava,só é ruim enquanto vc n entende kk

    alert("Eu amo js");

}

//EXERCÍCIO 4

function ex04() {

    let cidade = prompt("Digite o nome de uma cidade brasileira: ");
    alert(`Estive em ${cidade} e lembrei de você.`);

}

//EXERCÍCIO 5

function ex05() {

    let n1 = parseInt(prompt("Valor 1: "));
    let n2 = parseInt(prompt("Valor 2: "));

    
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

    let numero = parseFloat(document.getElementById('input_ex08').value);
    let dobro = numero + numero;

    let resultado = document.getElementById('resultado_ex08');
    resultado.textContent = (`Dobro de ${numero} = ${dobro}`);
}

//EXERCÍCIO 9

function ex09() {

    let n1 = parseFloat(document.getElementById('input_ex09_1').value);
    let n2 = parseFloat(document.getElementById('input_ex09_2').value);
    let n3 = parseFloat(document.getElementById('input_ex09_3').value);

    let media = (n1 + n2 + n3) / 3;

    let resultado = document.getElementById('resultado_ex09');
    resultado.textContent = (`Média: ${media}`);
}

//EXERCÍCIO 10

function ex10() {

    let n1 = parseFloat(document.getElementById('input_ex10_1').value);
    let n2 = parseFloat(document.getElementById('input_ex10_2').value);

    if (n1 > n2) {

        let resultado = document.getElementById('resultado_ex10');
        resultado.textContent = (`Maior: ${n1}`);

    } else {

        let resultado = document.getElementById('resultado_ex10');
        resultado.textContent = (`Maior: ${n2}`);

    }
}

//EXERCÍCIO 11

function ex11() {

    let numero = parseFloat(document.getElementById('input_ex11').value);
    let multiplicacao = numero * numero;

    let resultado = document.getElementById('resultado_ex11');
    resultado.textContent = (`${numero} x ${numero} = ${multiplicacao}`);
}

//EXERCÍCIO 12

function ex12() {

    let altura = parseFloat(document.getElementById('input_ex12_1').value);
    let peso = parseFloat(document.getElementById('input_ex12_2').value);

    let imc = peso / (altura * altura);

    let resultado = document.getElementById('resultado_ex12');
    resultado.textContent = (`IMC: ${imc}`);

    //console.log(imc);
    //alert (`${altura}, ${peso}`);
}

//EXERCÍCIO 13

function ex13() {

    let numero = parseInt(document.getElementById('input_ex13').value);
    let resultado = 1;

    for (let i = numero; i >= 1; i--) {
        resultado *= i;
    }

    let campoResultado = document.getElementById('resultado_ex13');
    campoResultado.textContent = (`Fatorial = ${resultado}`)
}

//EXERCÍCIO 14

function ex14() {

    let valorDolar = parseFloat(document.getElementById('input_ex14').value);
    let valorReal = valorDolar * 4.80;

    let resultado = document.getElementById('resultado_ex14');
    resultado.textContent = (`Valor em R$: ${valorReal}`);
}

//EXERCÍCIO 15

function ex15() {

    let altura = parseFloat(document.getElementById('input_ex15_1').value);
    let largura = parseFloat(document.getElementById('input_ex15_2').value);

    let area = altura * largura;
    let perimetro = (altura * 2) + (largura * 2);

    let resultado1 = document.getElementById('resultado_ex15_1');
    resultado1.textContent = (`Área: ${area}m².`);

    let resultado2 = document.getElementById('resultado_ex15_2');
    resultado2.textContent = (`Perímetro: ${perimetro} metros.`);
}

//EXERCÍCIO 16 

function ex16() {

    let raio = parseFloat(document.getElementById('input_ex16').value);

    //considerando pi como 3,14 

    let area = 3.14 * (raio * raio);
    let perimetro = 2 * (3.14 * raio);

    let resultado1 = document.getElementById('resultado_ex16_1');
    resultado1.textContent = (`Área: ${area}m².`);

    let resultado2 = document.getElementById('resultado_ex16_2');
    resultado2.textContent = (`Perímetro: ${perimetro} metros.`);
}

//EXERCÍCIO 17

function ex17() {

    let numero = parseFloat(document.getElementById('input_ex17').value);
    let lista = document.getElementById('resultado_ex17');
    let tabuada = document.getElementById('resultado_tabuada');

    lista.innerHTML = '';
    tabuada.textContent = `Tabuada do ${numero}:`;


    for (let i = 1; i <= 10; i++) {
        
        lista.innerHTML = lista.innerHTML + `${numero} x ${i} = ${numero * i}` + "<br>";
        
        //console.log(resultado);
        //me sinto uma idiota vendo o quão simples era isso aqui kk
    }
}


//EXERCÍCIO 18

function ex18() {

    let listaGenerica = []; //exercicio 18
}

let linguagensDeProgramacao = [];

//EXERCÍCIO 19

function ex19() {

    let linguagensDeProgramacao = ['JavaScript', 'C', 'C++', 'Kotlin', 'Phyton'];

    let resultado = document.getElementById('resultado_exercicios');
    resultado.textContent = linguagensDeProgramacao;
}

//EXERCÍCIO 20

function ex20() {

    let nomeLinguagens = document.getElementById('input_exercicios');
    let lista = document.getElementById('resultado_exercicios');

    if (lista.textContent == '') {
        lista.textContent = nomeLinguagens.value;
    } else {
        lista.textContent = lista.textContent + ', ' + nomeLinguagens.value;
    }

    //'Java', 'Ruby' e 'GoLang'

    linguagensDeProgramacao.push(nomeLinguagens.value);
    nomeLinguagens.value = '';
}

//EXERCÍCIO 21

function ex21() {

    let nomes = ["Nome1", "Nome2", "Nome3"];
    let primeiroNome = nomes[0];
    console.log(primeiroNome);
}

//EXERCÍCIO 22

function ex22() {

    let nomes = ["Nome 1", "Nome2", "Nome3"];
    let primeiroNome = nomes[1];
    console.log(primeiroNome);
}

//EXERCÍCIO 23

function ex23() {

    let nomes = ["Nome 1", "Nome2", "Nome3"];
    let primeiroNome = nomes[2];
    console.log(primeiroNome);
}
