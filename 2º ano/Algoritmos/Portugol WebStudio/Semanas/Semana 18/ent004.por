programa {

    cadeia nome_personagem
    inteiro magic_level, distance_fighting_atual, magic_level_bonus, distance_fighting_atual_bonus
    logico pode_usar_magia_ml_15, pode_usar_arma_skill70
    const inteiro bonus_magia = 5, bonus_distance =10, level_para_usar_magia_ml15 = 15, level_para_usar_arma_skill70 = 70

  funcao inicio() {
    

    //Entrada

      escreva("--- Teste de Skills Avançadas (Tibia) ---\n")
      escreva("Nome do Personagem: ")
      leia(nome_personagem)
      escreva("Magic Level atual: ")
      leia(magic_level)
      escreva("Distance Fighting atual: ")
      leia(distance_fighting_atual)

    //Processamento

      magic_level_bonus = magic_level + bonus_magia
      distance_fighting_atual_bonus = distance_fighting_atual + bonus_distance

      pode_usar_magia_ml_15 = (magic_level_bonus > level_para_usar_magia_ml15 )
      pode_usar_arma_skill70 = (distance_fighting_atual_bonus > level_para_usar_arma_skill70)

    //Saída

      escreva("\n--- Relatório de Skills Efetivas para ", nome_personagem," ---")
      escreva("\nMagic Level Efetivo (com bônus +5): ", magic_level_bonus)
      escreva("\nDistance Fighting Efetivo (com bônus +10): ", distance_fighting_atual_bonus)
      escreva("\nPode usar Magia de ML 15? ", pode_usar_magia_ml_15)
      escreva("\nPode usar Arma de Skill 70? ", pode_usar_arma_skill70, "\n")

      
  }
}
