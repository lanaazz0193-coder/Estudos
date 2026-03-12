//Ana Lívia
programa {

  caracter confirm
  real n, soma_total = 0, menor_n, cont_pares = 0, media_n, cont_total_n = 0

  funcao inicio() {

    faca{

      escreva("Digite um número: ")
      leia(n)
      escreva("Deseja continuar? ")
      leia(confirm)

      se(n % 2 == 0){
        
        cont_pares = cont_pares + 1

      }

      cont_total_n = cont_total_n + 1
      soma_total = soma_total + n


    } enquanto (confirm == "s")

    media_n = soma_total / cont_total_n

    escreva("\nA soma desses números é ", soma_total)
    escreva("\nO menor número digitado foi ", menor_n)
    escreva("\nA média dos números é ", media_n)
    escreva("\n", cont_pares, " números são partes.")
    
  }
}
