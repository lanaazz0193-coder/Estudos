//Ana Lívia
programa {

  real a, b, c

  funcao inicio() {

    escreva("Qual o tamanho da primeira reta? ")
    leia(a)
    escreva("Qual o tamanho da segunda reta? ")
    leia(b)
    escreva("Qual o tamanho da terceira reta? ")
    leia(c)

    se ((a < (b + c)) e (b < (a + c)) e (c < (a + b))) {
      escreva("É possível fazer um triângulo com essas retas!")
    }

    senao {
      escreva("Não é possível fazer um triângulo com essas retas.")
    }
    
  }
}
