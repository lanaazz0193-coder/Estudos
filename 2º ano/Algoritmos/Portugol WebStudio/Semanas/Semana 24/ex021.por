//Ana Lívia
programa {

  inteiro ano
  logico anob

  funcao inicio() {

    escreva("Digite um ano: ")
    leia(ano)

    anob = (ano % 4 == 0) ou (ano % 400 ==0)

    se (anob == verdadeiro) {
      escreva(ano," é um ano bissexto.")
    }

    senao {
      escreva(ano," não é um ano bissexto.")
    }
    
  }
}
