const input = document.getElementById('input_item');
const botao = document.getElementById('adicionar_Button');
const ul = document.getElementById('lista_de_filmes');

function adicionarFilme(event){
    
    event.preventDefault();

    if (input.value == "") {
        alert("Digite o nome do filme");
        return
    }

    const li = document.createElement('li');
    
    const item = document.createElement('p');
    item.innerText = input.value;
    input.value = '';

    li.appendChild(item);
    ul.appendChild(li);

}

botao.addEventListener('click', adicionarFilme);

input.addEventListener('keypress', (event) => {

    if(event.key === 'Enter'){
        adicionarFilme(event);
    }
    
});

