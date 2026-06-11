export class DZNavbar extends HTMLElement {

    constructor() {
        super();
    }

    connectedCallback() {

        this.innerHTML = `<nav class="navbar navbar-expand-sm navbar-dark sticky-top custom-nav" style="background-color: rgb(65, 30, 8);">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: #ffd8bd;">AL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="navbar bg-body-tertiary">
                </nav>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./meustrabalhos.html"
                                style="color: #ffd8bd;">Meus Trabalhos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./contato.html"
                                style="color: #ffd8bd;">Entre em Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>`

    }

}