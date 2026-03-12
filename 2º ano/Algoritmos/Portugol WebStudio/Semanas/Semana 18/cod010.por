programa {

inteiro n1, n2, resultado
logico e_multiplo


  funcao inicio() {

    escreva("Digite o primeiro número inteiro: ")
    leia(n1)
    escreva("Digite o segundo número inteiro: ")
    leia(n2)

    resultado = (n1 % n2)
    e_multiplo = (resultado == 0)

   escreva("O primeiro é múltiplo do segundo? ", e_multiplo)
    
  }
}
