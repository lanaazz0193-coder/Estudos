const inputItem = document.getElementById('input-item');
//console.log(inputItem);
const botaoAdicionar = document.getElementById('adicionar-item');
//console.log(botaoAdicionar);
const listaDeCompras = document.getElementById('lista-de-compras')
let contador = 0;

botaoAdicionar.addEventListener('click', (evento) => {
    evento.preventDefault();
    //console.log(inputItem.value);

    if (inputItem.value == "") {
        alert("Por favor, coloque algum item no campo");
        return
    }

    //cria o LI do html
    const itemDaLista = document.createElement('li');

    //cria a DIV e incluia as classes
    const containerDaLista = document.createElement('div');
    containerDaLista.classList = ('lista-item-container');

    //cria o INPUT do formulario e adiciona os atributos tipo e id
    const inputDaLista = document.createElement('input');
    inputDaLista.type = ('checkbox');
    inputDaLista.id = ('checkbox-' + contador ++);

    //cria o paragrafo da lista
    const nomeItemDaLista = document.createElement('p');
    nomeItemDaLista.innerText = inputItem.value;

    //amarra os elementos herdados 

    containerDaLista.appendChild(inputDaLista);
    containerDaLista.appendChild(nomeItemDaLista);

    itemDaLista.appendChild(containerDaLista);
    listaDeCompras.appendChild(itemDaLista);


})