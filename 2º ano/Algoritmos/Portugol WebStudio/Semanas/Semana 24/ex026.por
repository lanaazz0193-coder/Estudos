//Ana Lívia
programa {

  inteiro n1, n2

  funcao inicio() {

    escreva("Digite um número inteiro: ")
    leia(n1)
    escreva("Digite outro número inteiro: ")
    leia(n2)

    se (n1 > n2) {
      escreva(n1, " é maior que ", n2, ".")
    }

    se (n1 < n2) {
      escreva(n1, " é menor que ", n2, ".")
    }

    se (n1 == n2) {
        escreva(n1, " e ", n2, " são iguais.")
    }

    
  }
}
