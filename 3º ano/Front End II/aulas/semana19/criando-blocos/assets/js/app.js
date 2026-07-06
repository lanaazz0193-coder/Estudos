const input = document.getElementById('input_nome');
const botao = document.getElementById('btn_bloco');
const section = document.getElementById('area_galeria');

function gerarBlocos(event){
    event.preventDefault();

    if(input.value == ""){
        alert("Digite alguma coisa.");
        return;
    }

    const div = document.createElement('div');
    div.classList = ('btn btn-success text-light border-2 fw-bold');

    const nome = document.createElement('p');
    nome.textContent = input.value;
    input.value = '';
    
    div.appendChild(nome);
    section.appendChild(div);

}

botao.addEventListener('click', gerarBlocos);

input.addEventListener('keypress', (event) => {

    if(event.key == 'Enter'){
        gerarBlocos(event);
    }

});
