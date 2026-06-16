export class BCard extends HTMLElement {

    constructor(){

        super();

    }

    connectedCallback(){

        let titulo = this.getAttribute('titulo-card');
        let texto = this.innerHTML;
        let botao = this.getAttribute('nome-botao');
        let imagem = this.getAttribute('endereco-imagem')

        this.innerHTML = `<div class="card m-5 p-3 text-center" style="width: 15rem;">

            <img src="${imagem}" alt="">

            <div class="card-body">
                <h5 class="card-title">${titulo}</h5>
                <p class="card-text">${texto}</p>
                <a href="#" class="btn" style="background-color: #818181; color: #ffffff; font-size: 15px;">${botao}</a>
            </div>

        </div>`
        
        

    }

}