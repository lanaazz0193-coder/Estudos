export class BCard extends HTMLElement {

    constructor(){

        super();

    }

    connectedCallback(){

        let titulo = this.getAttribute('titulo-card');
        let texto = this.innerHTML;
        let imagem = this.getAttribute('endereco-imagem')

        this.innerHTML = `<div class="card m-5 p-3 text-center rounded-4 c-cinza-claro" style="width: 15rem; height: 30rem;">

            <img class="rounded-4" src="${imagem}" alt="">

            <div class="card-body">
                <h5 class="card-title">${titulo}</h5>
                <p class="card-text mb-4">${texto}</p>
                <a href="#" class="btn c-azul-escuro f-branco">Acessar</a>
            </div>

        </div>`
        
        

    }

}