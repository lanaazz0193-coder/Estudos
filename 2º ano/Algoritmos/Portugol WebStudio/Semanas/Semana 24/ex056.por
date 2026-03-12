//Ana Lívia
programa {

  inteiro n1, soma = 0

  funcao inicio() {

    escreva("Digite um número (1111 para parar): ")
    leia(n1)

    enquanto(n1 != 1111) {

      soma = soma + n1

      escreva("Digite outro número (1111 para parar): ")
      leia(n1)

    }

    escreva("\nSoma dos números digitados: ", soma)
    escreva("\nPrograma Encerrado!")
    
  }
}
