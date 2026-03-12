//Ana Lívia
programa {

  inteiro contador, idade, n_homens = 0, n_mulheres = 0, soma_idades = 0, soma_idades_h = 0
  
  real media_idades, media_idades_h

  caracter sexo

  funcao inicio() {

    para(contador = 1; contador <= 5; contador ++){
      escreva("Sexo pessoa ", contador, ": ")
      leia(sexo)
      escreva("Idade pessoa ", contador, ": ")
      leia(idade)

      soma_idades = soma_idades + idade

      se(sexo == "h"){

        n_homens = n_homens + 1
        soma_idades_h = soma_idades_h + idade

      }

      se(sexo == "m"){

        n_mulheres = n_mulheres + 1

      }
    }


    media_idades = soma_idades / 5
    media_idades_h = soma_idades_h / n_homens

    escreva("\nMulheres cadastradas: ", n_mulheres)
    escreva("\nHomens cadastrados: ", n_homens)
    escreva("\nMédia idade geral: ", media_idades)
    escreva("\nMédia idade homens: ", media_idades_h)

  }
}
