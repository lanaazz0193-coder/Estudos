//Ana Lívia
programa {

  inteiro n = 30

  funcao inicio() {

    enquanto (n >= 1) {


      se (n % 4 == 0){

        escreva("[", n, "] ")

      }
      senao{

        escreva(n, " ")

      }

        n = n - 1
    }

    escreva("Acabou!")
    
  }
}
