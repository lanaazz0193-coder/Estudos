//Ana Lívia
programa {

  inteiro idade, contador = 0, cont_idades = 0, cont21 = 0, soma_idades = 0
  real media
  caracter confirm

  funcao inicio() {

    faca {

      contador = contador + 1

      escreva("Digite a idade da ", contador, "º pessoa: ")
      leia(idade)
      escreva("Deseja continuar? ")
      leia(confirm)

      soma_idades = soma_idades + idade
      cont_idades = cont_idades + 1
      media = soma_idades / cont_idades

      se(idade >= 21){

        cont21 = cont21 + 1
      }

    } enquanto (confirm == "s")

    escreva("\nForam digitadas ", cont_idades)
    escreva("\nA média das idades é ", media)
    escreva("\n", cont21," são maiores de 21")
    
  }
}
