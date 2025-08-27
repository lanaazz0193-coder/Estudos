//Ana Lívia
programa {

  real n1, n2, media

  funcao inicio() {

    escreva("Digite sua primeira nota: ")
    leia(n1)
    escreva("Digite sua segunda nota: ")
    leia(n2)

    media = (n1 + n2)/ 2

    se (media >= 7) {
      escreva("Sua média é ", media,".\nVocê teve um bom aproveitamento!")
    }
 
    senao {
      escreva("Sua média é ", media, ".\nVocê não teve bom aproveitamento, continue se esforçando!")
    }
    
  }
}
