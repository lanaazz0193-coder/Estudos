//Ana Lívia
programa {

  real s, vc, st

  funcao inicio() {

    escreva("Digite seu salártio fixo: ")
    leia(s)
    escreva("Digite o valor das vendas que você fez: ")
    leia(vc)

    st = s + (vc * (4 / 100))

    escreva("Você irá receber R$", st)
    
  }
}
