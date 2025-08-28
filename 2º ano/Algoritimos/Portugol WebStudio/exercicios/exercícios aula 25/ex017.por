//Ana Lívia
programa {

  const inteiro vmax = 80
  inteiro v, multa

  funcao inicio() {

    escreva("Insira a velociade do carro: ")
    leia(v)

    se (v > vmax ) {
      escreva("Você ultrapassou a velocidade máxima e recebeu uma multa\n")

      multa = (v - vmax) * 5

      escreva("O valor da multa é de R$", multa, ".")
    }

    senao {
      escreva("Velocidade normal, você não foi multado")
    }
    
  }
}
