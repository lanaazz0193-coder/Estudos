//Ana Lívia
programa {

  inteiro h, p
  real d

  funcao inicio() {
    
    escreva("Quantas horas foram praticadas esse mês? ")
    leia(h)

    se (h <= 10) {
      p = h * 2
      d = p * 0.05
      escreva("Com essa quantidade de horas você fez ", p, " pontos, que equivalem a R$", d, ".")
    }

    se ((h > 10) e (h <= 20)) {
      p = h * 5
      d = p * 0.05
      escreva("Com essa quantidade de horas você fez ", p, " pontos, que equivalem a R$", d, ".")
    }

    se (h > 20) {
      p = h * 10
      d = p * 0.05
      escreva("Com essa quantidade de horas você fez ", p, " pontos, que equivalem a R$", d, ".")
    }
  }
}
