export class BFooter extends HTMLElement {

    constructor(){

        super();

    }

    connectedCallback(){
        this.innerHTML = `<footer class="p-5 f-cinza-claro c-azul-escuro">

        <div class="texto mt-5">
            <h3 class="fs-1 titulo">Biblioteca<h3>
                <p class="fs-6"></p>
                <p style="font-size: 12px;">Todos os Direitos Reservados 2026 &copy;</p>
        </div>
        
    </footer>`

    }

}
