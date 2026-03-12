//Ana Lívia
programa {

  real l, c, a

  funcao inicio() {

    escreva("Digite a largura do terreno: ")
    leia(l)
    escreva("Digite o comprimento do terreno: ")
    leia(c)

    a = l * c

    escreva("A área do terreno é de ", a, " m².")

    se (a < 100) {
      escreva("TERRENO POPULAR")
    }

    se ((a >= 100) e (a <= 500)) {
      escreva("TERRENO MASTER")
    }

    se (a > 500) {
      escreva("TERRENO VIP")
    }
    
  }
}
