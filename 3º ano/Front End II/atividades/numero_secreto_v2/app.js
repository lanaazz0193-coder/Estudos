//let titulo = document.querySelector('h1');
//titulo.innerHTML = 'Jogo do Número Secreto';

//let paragrafo = document.querySelector('p');
//paragrafo.innerHTML = 'Escolha um número de 1 a 10';

function exibirTexto (tag, texto) {

    let campo = document.querySelector(tag);
    campo.innerHTML = texto;

}

let tentativas = 1;

function textoInicial() {

    exibirTexto('h1', 'Jogo do Número Secreto');
    exibirTexto('p', 'Escolha um número de 1 a 10');

}

textoInicial();

let numeroSecreto = gerarNumeroSecreto();

function gerarNumeroSecreto() {

    return parseInt(Math.random() * 10) + 1;

}

function verificarChute() {

    let chute = document.querySelector('input').value;

    if (tentativas > 10) {
        exibirTexto('h1', 'Game Over');
    }

    if (chute == numeroSecreto){

        exibirTexto('h1', 'Acertou!');

        let palavraTentativa = tentativas == 1 ? 'tentativa.' : 'tentativas.';
        let msgTentativa = `Parabéns, você acertou o Número Secreto (${numeroSecreto}), com ${tentativas} ${palavraTentativa}`

        exibirTexto('p', msgTentativa);

        document.getElementById('reiniciar').removeAttribute('disabled');
        document.querySelector('input').setAttribute('disabled', true);


    } else {

        tentativas ++;

        limparCampo()

        if (chute > numeroSecreto) {

            exibirTexto('p','O número secreto é menor, tente novamente.');

        } else {

            exibirTexto('p','O número secreto é maior, tente novamente.');

        }
    }

}

function limparCampo() {

    chute = document.querySelector('input');
    chute.value = '';

}

function novoJogo() {

    textoInicial();
    numeroSecreto = gerarNumeroSecreto();
    document.querySelector('input').removeAttribute('disabled');
    limparCampo();
    document.getElementById('reiniciar').setAttribute('disabled', true);
    document.getElementById('chute').removeAttribute('disabled');

}

console.log(numeroSecreto);