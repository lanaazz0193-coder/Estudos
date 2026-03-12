//Ana Lívia
programa {

  real n, nc, nd, nu

  funcao inicio() {

    escreva("Digite um número: ")
    leia(n)

    nc = n / 100
    nd = n / 10
    nu = n / 1

    escreva("Esse número equivale a ", nc, " centena(s).\n")
    escreva("Esse número equivale a ", nd, " dezena(s).\n")
    escreva("Esse número equivale a ", nu, " unidade(s).\n")
    
  }
}
