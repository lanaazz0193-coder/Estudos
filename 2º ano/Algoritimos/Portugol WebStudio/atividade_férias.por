programa {

  const cadeia MONSTRO = "Cyclops"
  const inteiro VIDA_MONSTRO = 260, LVL = 20, SKILL_NORMAL = 30, MAGIC_LVL = 15
  const real defesa_monstro = 1.1
  cadeia nome_personagem
  caracter vocacao
  inteiro lvl, skill_ataque, magic_lvl, dano_base_arma
  logico pode_usar_arma

  funcao inicio() {

    //ENTRADA

    escreva("Nome do seu personagem: ")
    leia(nome_personagem)
    escreva("Level do personagem: ")
    leia(lvl)
    escreva("Skill de ataque: ")
    leia(skill_ataque)
    escreva("Vocação do personagem: ")
    leia(vocacao)
    escreva("Magic level: ")
    leia(magic_lvl)
    escreva("Dano base arma: ")
    leia(dano_base_arma)

    pode_usar_arma = ((lvl > LVL e skill_ataque > SKILL_NORMAL) ou ((vocacao == "S" ou vocacao == "D") e (magic_lvl > MAGIC_LVL)))



    
  }
}
