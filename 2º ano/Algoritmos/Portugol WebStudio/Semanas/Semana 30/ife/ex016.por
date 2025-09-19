//Ana Lívia
programa {

  inteiro qs, pt
  const inteiro q = 2 * 50, p = 50, r = 100

  funcao inicio() {

    escreva("Quantos sanduíches você pretende fazer? ")
    leia(qs)

    pt = (qs * (q + p + r)) / 1000

    escreva("O peso total necessário para fazer ", qs, " sanduíches é ", pt, "KG.")
    
  }
}
