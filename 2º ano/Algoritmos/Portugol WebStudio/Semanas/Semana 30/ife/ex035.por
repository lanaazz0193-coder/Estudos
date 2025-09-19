//Ana Lívia
programa {

  real dma, dme, h, a

  funcao inicio() {
    
    escreva("Qual a medida da diagonal maior: ")
    leia(dma)
    escreva("Qual a medida da diagonal menor: ")
    leia(dme)
    escreva("Qual a altura do losango? ")
    leia(h)

    a = (dma + dme) * h / 2

    escreva("A área desse losango é ", a, "cm(m)².")

    
  }
}
