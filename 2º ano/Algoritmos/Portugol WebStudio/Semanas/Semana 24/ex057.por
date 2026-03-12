//Ana Lívia
programa {

  caracter confirm, sexo
  real salario, soma_m = 0, soma_h = 0

  
  funcao inicio() {

    escreva("Digite o sexo do funcionário (m para mulher, h para homem): ")
    leia(sexo)
    escreva("Digite o salário do funcionário: ")
    leia(salario)
    escreva("Deseja continuar? ")
    leia(confirm)  

    faca {
      escreva("Digite o sexo do funcionário (m para mulher, h para homem): ")
      leia(sexo)
      escreva("Digite o salário do funcionário: ")
      leia(salario)
      escreva("Deseja continuar? ")
      leia(confirm) 

      
    

      se(sexo == "m"){

        soma_m = soma_m + salario

      }

      se(sexo == "h"){

        soma_h = soma_h + salario

       }

     }enquanto(confirm == "s")


      escreva("\nO total pago as mulheres é R$", soma_m)
      escreva("\nO total pago aos homens é R$", soma_h)
    
  }
}
