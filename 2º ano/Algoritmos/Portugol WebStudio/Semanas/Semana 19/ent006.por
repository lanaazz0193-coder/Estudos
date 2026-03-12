programa {
//Ana Lívia

  const inteiro XP_BASE = 5000
  const real GP_BASE = 1000.0
  cadeia nome
  inteiro lvl, recompensa_xp1, recompensa_xp2, recompensa_xp
  real recompensa_gp1, recompensa_gp2, recompensa_gp
  logico bonus1, bonus2, bonus

  funcao inicio() {

  //ENTRADA

    escreva("--- Calculadora de Recompensa de Quest ---\n")
    escreva("Nome do Personagem: ")
    leia(nome)
    escreva("Level do Personagem: ")
    leia(lvl)

  //PROCESSAMENTO

   bonus = (lvl <= 30)
   bonus1 = ((lvl > 30) e (lvl <= 60))
   bonus2 = (lvl > 60)

   recompensa_xp = XP_BASE
   recompensa_xp1 = XP_BASE * 1.2
   recompensa_xp2 = XP_BASE * 1.5

   recompensa_gp = GP_BASE
   recompensa_gp1 = GP_BASE * 1.2
   recompensa_gp2 = GP_BASE * 1.5


  //SAIDA

    escreva("\n--- Recompensa Final para ", nome, " ---")


  se (bonus == verdadeiro) {
    escreva("\nBonus do Levl aplicado: 1.0")
  }

  senao se (bonus1 == verdadeiro) {
    escreva("\nBônus de Level aplicado: 1.2")
  }
  senao {
    escreva("\nBônus de Level aplicado: 1.5")
  }


  se (bonus == verdadeiro) {
    escreva("\nRecompensa de XP: ", recompensa_xp)
  }

  senao se (bonus1 == verdadeiro) {
    escreva("\nRecompensa de XP: ",recompensa_xp1)
  }

  senao {
    escreva("\nRecompensa de XP: ", recompensa_xp2)
  }

  se (bonus == verdadeiro) {
    escreva("\nRecompensa de GP: ",recompensa_gp)
  }

  senao se (bonus1 == verdadeiro) {
    escreva("\nRecompensa de GP: ",recompensa_gp1)
  }

  senao {
    escreva("\nRecompensa de GP: ", recompensa_gp2)
  }
    

  }
}
