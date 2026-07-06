export class BNavbar extends HTMLElement {

    constructor(){

        super();

    }

    connectedCallback(){

        this.innerHTML = `<nav class="navbar navbar-expand-sm c-azul-escuro">
        <div class="container-fluid">

            <a class="navbar-brand f-m f-branco f-playfair mx-5" href="./index.html">Biblioteca</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item btn c-cereja my-1">
                        <a class="nav-link f-branco" aria-current="page"
                            href="./index.html">Ínicio</a>
                    </li>
                    <li class="nav-item btn c-cereja my-1">
                        <a class="nav-link f-branco" aria-current="page"
                            href="./cadastro.html">Cadastro</a>
                    </li>
                    <li class="nav-item btn c-cereja my-1">
                        <a class="nav-link f-branco" aria-current="page"
                            href="./edicao.html">Edição</a>
                    </li>
                    <li class="nav-item btn c-cereja my-1">
                        <a class="nav-link f-branco" aria-current="page"
                            href="./tabela.html">Tabela</a>
                    </li>
                    <li class="nav-item btn c-cereja my-1">
                        <a class="nav-link f-branco" aria-current="page"
                            href="./administracao.html">Administração</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>`

    }

}