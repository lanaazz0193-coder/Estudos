//Ana Lívia
programa {

  inteiro m1, m5, m10, m25, m50, m100
  real vt

  funcao inicio() {

    escreva("Digite a quantidade de moedas de 1 centavo guardadas: ")
    leia(m1)
    escreva("Digite a quantidade de moedas de 5 centavos guardadas: ")
    leia(m5)
    escreva("Digite a quantidade de moedas de 10 centavos guardadas: ")
    leia(m10)
    escreva("Digite a quantidade de moedas de 25 centavos guardadas: ")
    leia(m25)
    escreva("Digite a quantidade de moedas de 50 centavos guardadas: ")
    leia(m50)
    escreva("Digite a quantidade de moedas de 100 centavos (1 real) guardadas: ")
    leia(m100)

    vt = (m1 * 0.01) + (m5 * 0.05) + (m10 * 0.10) + (m25 * 0.25) + (m50 * 0.50) + (m100 * 0.100)

    escreva("O valor total guardado é de R$", vt)
  }
}
