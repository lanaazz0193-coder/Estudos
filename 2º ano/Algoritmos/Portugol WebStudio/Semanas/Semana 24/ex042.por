//Ana Lívia
programa {

  inteiro n1, contador = 1

  funcao inicio() {

    escreva("Digite um número: ")
    leia(n1)

    enquanto(contador <= n1) {
      escreva(contador, " ")
      contador = contador + 1
    }

    escreva("Acabou!")
    
  }
}
