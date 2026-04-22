let valorTotal = 0;

limpar();

function limpar() {

    let textoTotal = document.getElementById('valor-total');
    textoTotal.textContent = ` `;

    let listaProduto = document.getElementById('lista-produtos');
    listaProduto.innerHTML = ` `;

}


function adicionar() {

    let produto = document.getElementById('produto').value;
    let quantidade = document.getElementById('quantidade').value;
    let nomeProduto = produto.split('-')[0];
    let valorProduto = produto.split('R$')[1];

    let parcial = valorProduto * quantidade;


    let listaProduto = document.getElementById('lista-produtos');
    listaProduto.innerHTML = listaProduto.innerHTML + `<section class="carrinho__produtos__produto">
    <span class="texto-azul">${quantidade}x</span> ${nomeProduto} <span class="texto-azul">${parcial}</span>
    </section>`;


    valorTotal = valorTotal + parcial;


    let textoTotal = document.getElementById('valor-total');
    textoTotal.textContent = `R$${valorTotal}`;

}