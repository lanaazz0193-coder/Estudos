programa {

  inteiro dmi, dma, dme

  funcao inicio() {

    escreva("--- Calculadora de Dano Médio (Tibia) ---\n")
    escreva("Qual dano MÍNIMO da sua arma? ")
    leia(dmi)
    escreva("Qual o dano MÁXIMO da sua arma? ")
    leia(dma)

    dme = (dma + dmi) / 2
    
    escreva("Sua arma tem Dano Mínimo: ", dmi, ", Dano Máximo: ", dma, " e Dano Médio: ", dme)
    
  }
}
