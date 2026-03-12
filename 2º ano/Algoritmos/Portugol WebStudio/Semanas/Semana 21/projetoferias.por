//Ana Lívia
programa {

  const cadeia NOME_MONSTRO = "Cyclops"
  const inteiro VIDA_MONSTRO = 260
  const real FATOR_DEFESA = 1.1

  const inteiro REQUISITO_LVL = 20, REQUISITO_SKILL = 30, REQUISITO_ML = 15

  cadeia nome
  inteiro lvl, skill_ataque, ml
  caracter vocacao
  real dano_base_arma
  logico pode_usar_arma

  real dano_bruto
  real dano_final_monstro
  real vida_monstro_atualizada

  funcao inicio() {

//ENTRADA

    escreva("--- Simulador de Batalha v3.0: Lógica Avançada ---\n")
    escreva("Digite o nome do seu Herói: ")
    leia(nome)
    escreva("Digite o level de ", nome, ": ")
    leia(lvl)
    escreva("Digite a skill de ataque (ex: Sword) de ", nome,": ")
    leia(skill_ataque)
    escreva("Digite sua vocação ('K'night, 'P'aladin, 'M'age): ")
    leia(vocacao)
    escreva("Digite seu Magic Level: ")
    leia(ml)
    escreva("Digite o dano base da sua arma: ")
    leia(dano_base_arma)

//PROCESSAMENTO

    pode_usar_arma = ((lvl >= REQUISITO_LVL e skill_ataque >= REQUISITO_SKILL) ou ((vocacao == "M") e ml >= REQUISITO_ML))

    se (pode_usar_arma) {
      escreva("\n--> Requisitos atendidos! Iniciando ataque...\n")
    } 
    
    senao {
      escreva("\n--- ATAQUE FALHOU ---\n")
      escreva("Você não atende aos requisitos para usar esta arma.\n")
    }



    dano_bruto = dano_base_arma + (skill_ataque * 0.5) + (lvl * 0.2)

    se(dano_bruto > 100.0) {
      escreva("--> GLPE CRÍTICO! Dano aumentado em 20%\n")
      dano_bruto = dano_bruto * 1.20

    }

    dano_final_monstro = dano_bruto / FATOR_DEFESA
    vida_monstro_atualizada = VIDA_MONSTRO - dano_final_monstro

//SAIDA

    escreva("\n--- RELATÓRIO DA RODADA DE COMBATE ---\n")
    escreva("Dano Bruto do Ataque (com bônus se houver): ", dano_bruto, "\n")
    escreva("Dano final no ", NOME_MONSTRO, "(após defesa): ", dano_final_monstro, "\n")
    escreva("--------------------------------------------------\n")

    se (vida_monstro_atualizada <= 0.0) {
      escreva("RESULTADO : O ", NOME_MONSTRO, "foi derrotado!\n")

    } 
    senao {
      escreva("RESULTADO: O ", NOME_MONSTRO, " sobreviveu com ", vida_monstro_atualizada, " de vida.\n")

    }

    escreva("--------------------------------------------------\n")
  }

}
