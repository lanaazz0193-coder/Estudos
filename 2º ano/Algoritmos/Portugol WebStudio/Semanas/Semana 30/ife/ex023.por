//Ana Lívia
programa {

  real a, s, sp, ap

  funcao inicio() {

    escreva("Qual a sua altura? ")
    leia(a)
    escreva("Qual o tamanho da sua sombra em metros? ")
    leia(s)
    escreva("Qual o tamanho da sombra do prédio? ")
    leia(sp)

    ap = (a * sp) / s

    escreva("O tamanho deste prédio é de ", ap, " metros.")
  }
}
