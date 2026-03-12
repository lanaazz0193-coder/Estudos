//Ana Lívia
programa {

  inteiro contador = 1, n1 = 1, soma = 1

  funcao inicio() {

    escreva("Digite um número: ")
    leia(n1)

    enquanto (contador <6) {
    escreva("Digite um número: ")
    leia(n1)


    contador = contador + 1
    soma = soma + n1

    }

    escreva("A soma desses números é igual a : ", soma)
    
  }
}
