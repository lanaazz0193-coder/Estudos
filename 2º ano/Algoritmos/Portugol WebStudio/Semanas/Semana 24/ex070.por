//Ana Lívia
programa {

  inteiro a = 1, b = 1, c, contador = 3

  funcao inicio() {
  
    escreva(a, " ", b, " ")

    enquanto (contador <= 10) {

      c = a + b

      escreva(c, " ")

      contador = contador + 1

      a = b
      b = c

    }

    escreva("\nAcabou!")
  }
}