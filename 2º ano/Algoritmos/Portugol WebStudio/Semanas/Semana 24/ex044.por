//Ana Lívia
programa {

  inteiro vi, vf, i

  funcao inicio() {

    escreva("Digite o primeiro valor: ")
    leia(vi)
    escreva("Digite o último valor: ")
    leia(vf)
    escreva("Digite o incremento: ")
    leia(i)

    enquanto (vi <= vf) {
      escreva(vi, " ")
      vi = vi + i
    }

    escreva("Acabou!")
    
  }
}
