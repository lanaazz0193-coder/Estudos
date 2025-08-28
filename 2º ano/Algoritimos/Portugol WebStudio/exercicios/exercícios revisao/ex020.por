programa {

  const cadeia nome_monstro = "Cyclops"
  const inteiro xp_por_monstro = 150
  const real gp_por_monstro = 25.5
  const real peso_loot_por_monstro = 3.2

  cadeia nome_personagem
  inteiro monstros_derrotados, xp_total, xp_por_hora
  real horas, custo_suprimentos, gp_total, peso_total, custo_total, gp_por_hora


  


  funcao inicio() {

    //entrada 

      escreva("--- Relatório Detalhado de Caçada no Tibia ---\n")
      escreva("Monstro Caçado: ", nome_monstro, "\n")

      escreva("\nNome do seu Personagem: ") //Espere o usuário digitar
      leia(nome_personagem)

      escreva("Quantos ", nome_monstro, "(s) você derrotou? " ) //Espere o usuário digitar
      leia(monstros_derrotados)

      escreva("Tempo total gasto na caçada (em horas, ex: 1.5 para 1hr30min): ") //Espere o usuário digitar
      leia(horas)

      escreva("Custo total dos suprimentos (poções, etc.) em GPs: ") //Espere o usuário digitar
      leia(custo_suprimentos)


    //processamento

      xp_total = monstros_derrotados * xp_por_monstro

      gp_total = monstros_derrotados * gp_por_monstro

      peso_total = monstros_derrotados * peso_loot_por_monstro

      custo_total = gp_total - custo_suprimentos

      xp_por_hora = xp_total / horas

      gp_por_hora = gp_total / horas


    //saída

      escreva("\n--- Relatório da Caçada de Paladino Aventureiro ---")
      escreva("\nMonstro Focado: ", nome_monstro)
      escreva("\nQuantidade Derrotada: ", monstros_derrotados)
      escreva("\nTempo de Caçada: ", horas, " horas")

      escreva("\n--------------------------------------------------")

      escreva("\nXP Total Ganhada: ", xp_total, " pontos de experiência")
      escreva("\nGP Total Estimado Coletado: ", gp_total, " GPs")
      escreva("\nPeso Total Estimado do Loot: ", peso_total, " Oz")

      escreva("\n--------------------------------------------------")

      escreva("\nCusto dos Suprimentos: ", custo_suprimentos, " GPs")
      escreva("\nLucro/Prejuízo Estimado: ", custo_total, " GPs")

      escreva("\n--------------------------------------------------")

      escreva("\nMédia de XP por Hora: ", xp_por_hora, " XP/h")
      escreva("\nMédia de GP por Hora: ", gp_por_hora, " GPs")

       escreva("\n--------------------------------------------------")

       escreva("\nBom jogo, ", nome_personagem, "!")




  }
}
