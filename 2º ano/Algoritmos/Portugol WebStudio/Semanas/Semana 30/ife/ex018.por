//Ana Lívia
programa {

  real h, he, th, the, tb, tl

  funcao inicio() {

    escreva("Digite quantas horas foram trabalhadas: ")
    leia(h)
    escreva("Digite quantas horas extras foram trabalhadas: ")
    leia(he)

    th = (h * 10)
    the = (h * 15)

    tb = th + the
    tl = tb - (tb * (10 / 100))

    escreva("O total bruto a ser recebido por ", h, " e ", he," trabalhadas é de R$", tb)
    escreva("\nO total líquido a ser recebido por ", h, " e ", he," trabalhadas é de R$", tl)
  }
}
