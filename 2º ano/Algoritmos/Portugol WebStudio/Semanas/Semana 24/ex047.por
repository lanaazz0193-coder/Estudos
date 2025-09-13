//Ana Lívia
programa {

  inteiro n1 = 500, soma = 0

  funcao inicio() {

    enquanto (n1 >=0) {
      escreva(n1, " + ")

      n1 = n1 - 50
      soma = soma + n1
      
    }

    escreva("\nO valor da soma é de: ", soma)
    
  }
}
