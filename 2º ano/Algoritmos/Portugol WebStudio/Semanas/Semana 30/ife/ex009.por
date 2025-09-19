//Ana Lívia
programa {

  inteiro cp, cm, cg, t

  funcao inicio() {

    escreva("Quantas camisetas pequenas? ")
    leia(cp)
    escreva("Quantas camisetas médias? ")
    leia(cm)
    escreva("Quantas camisetas grandes? ")
    leia(cg)

    t = (cp * 10) + (cm * 12) + (cg * 15)

    escreva("O valor total desta compra é R$", t)
  }
}
