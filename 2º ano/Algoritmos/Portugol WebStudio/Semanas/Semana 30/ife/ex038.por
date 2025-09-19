//Ana Lívia
programa {

  inteiro aa, an, a, m, d

  funcao inicio() {

    escreva("Digite o ano atual: ")
    leia(aa)
    escreva("Digite seu ano de nascimento: ")
    leia(an)

    a = aa - an
    m = a * 12
    d = a * 365

    escreva("Você viveu por ", a, " anos.")
    escreva("\nVocê viveu por ", m, " meses.")
    escreva("\nVocê viveu por ", d, " dias.")
    
  }
}
