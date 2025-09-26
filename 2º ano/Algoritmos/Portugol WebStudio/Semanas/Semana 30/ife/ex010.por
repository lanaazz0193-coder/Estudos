//Ana Lívia
programa {

  inclua biblioteca Matematica --> mat

  real x1, x2, y1, y2, a, b, c

  funcao inicio() {

    

    escreva("Digite o valor de x1: ")
    leia(x1)
    escreva("Digite o valor de y1: ")
    leia(y1)
    escreva("Digite o valor de x2: ")
    leia(x2)
    escreva("Digite o valor de y2: ")
    leia(y2)

    b = x1 - x2
    c = y1 - y2

    a = mat.raiz(((b * b) + (c * c)), 2.0)

    escreva("A distância entre os dois pontos é de ", a)
    
  }
}
