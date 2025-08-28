//Ana Lívia
programa {

  real n1, n2, media

  funcao inicio() {

    escreva("Digite sua primeira nota: ")
    leia(n1)
    escreva("Digite sua segunda nota: ")
    leia(n2)

    media = (n1 + n2) / 2

    se (media <= 4.9) {
      escreva("REPROVADO")
    }

    se (media >=5 e media <= 6.9) {
      escreva("RECUPERAÇÂO")
    }

    se (media > 7.0) {
      escreva("APROVADO")
    }

    

  }
}

