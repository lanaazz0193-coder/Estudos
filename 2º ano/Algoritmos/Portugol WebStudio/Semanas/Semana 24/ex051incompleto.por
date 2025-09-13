//Ana Lívia
programa {

  inteiro contador = 1, n1 = 1, soma = 1

  funcao inicio() {

    enquanto (contador < 8) {
      escreva("Digite o valor do produto: ")
      leia(n1)

    contador = contador + 1
    soma = soma + n1

    }

    escreva("O valor total dos produtos foi de: ", soma)
    
  }
}
