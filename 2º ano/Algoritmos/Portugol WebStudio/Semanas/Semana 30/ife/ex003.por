//Ana Lívia
programa {

  inteiro pa, b
  real t, pe

  funcao inicio() {
    
    escreva("Quantos pães foram vendidos: ")
    leia(pa)
    escreva("Quantas broas foram vendidas: ")
    leia(b)

    t = (pa * 0.12) + (b * 1.50)
    pe = (10 / 100) * t

    escreva("O total vendido foi R$", t, " e o total a ser guardado na poupança deve ser R$", pe)
  }
}
