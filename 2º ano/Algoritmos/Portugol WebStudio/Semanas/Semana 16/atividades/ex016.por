programa {

  const cadeia magia = "'Energy Beam'"
  const inteiro mana = 20
  inteiro quantidade, quantidademana

  funcao inicio() {

    escreva("\n--- Calculadora de Custo de Mana (Magia: Energy Beam) ---")
    escreva("\nQuantas vezes você pretende lançar a magia ", magia, "? ")
    leia(quantidade)

  quantidademana = mana*quantidade

    escreva("Para lançar a magia ", magia, " ", quantidade, " vez(es), você gastará: ", quantidademana, " de mana.")


  }
}
