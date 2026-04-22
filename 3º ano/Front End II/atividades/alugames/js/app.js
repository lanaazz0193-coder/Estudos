function alterarStatus(id) {

let jogo = document.getElementById(`game-${id}`)
let imagem = jogo.querySelector('.dashboard__item__img') 
let botao = jogo.querySelector('.dashboard__item__button') 

    if (botao.classList.contains('dashboard__item__button--return')){

        botao.classList.remove('dashboard__item__button--return');

        botao.innerHTML = 'Alugar';

        imagem.classList.remove('dashboard__item__img--rented')

        

    } else {

        botao.classList.add('dashboard__item__button--return');

        botao.innerHTML = 'Devolver';

        imagem.classList.add('dashboard__item__img--rented')

    }
 
}