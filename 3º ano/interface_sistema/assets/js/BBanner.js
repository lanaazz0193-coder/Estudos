export class BBanner extends HTMLElement {

    constructor(){

        super();

    }

    connectedCallback(){

        let titulo = this.getAttribute('titulo-banner')
        let imagem = this.getAttribute('endereco-imagem')

        this.innerHTML = `<section class="banner position-relative vh-100 d-flex justify-content-center align-items-center text-center img-fluid"
            style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.65)), url('${imagem}');background-size: cover; background-position: center;">

            <div>
                <h1 class="f-g f-branco f-playfair">${titulo}</h1>
            </div>

        </section>`
    }


}