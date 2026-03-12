//Ana Lívia
programa {

  real bma, bme, h, a

  funcao inicio() {

    escreva("Digite o tamanho da base maior do trapézio: ")
    leia(bma)
    escreva("Digite o tamanho da base menor do trapézio: ")
    leia(bme)
    escreva("Digite a altura do trapézio: ")
    leia(h)

    a = ((bma + bme) * h) / 2

    escreva("A área deste trapézio é ", a,"cm(m)²")
    
  }
}
