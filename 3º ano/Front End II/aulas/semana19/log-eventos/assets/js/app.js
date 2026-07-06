const div = document.getElementById('container_historico');
const botao = document.getElementById('btn_registrar');


function registrarAcao(event) {

    event.preventDefault();

    const data = new Date();
    
    let dataFormatada = data.toLocaleString('pt-BR', {
        dateStyle: 'short', // Garante o formato dd/mm/aaaa
        timeStyle: 'medium' // Garante o formato hh:mm:ss (com segundos)
    });

    const p = document.createElement('p');
    p.textContent = `Ação registrada em data ${dataFormatada}`;

    div.appendChild(p);
}

botao.addEventListener('click', registrarAcao);
