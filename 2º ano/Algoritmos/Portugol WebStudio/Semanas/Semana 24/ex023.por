//Ana Lívia
programa {

  cadeia n
  caracter g
  real v, d_m, d_h, vt_m, vt_h

  funcao inicio() {

    escreva("Digite seu nome: ")
    leia(n)
    escreva("Digite seu gênero (M, para feminino H, para masculino): ")
    leia(g)
    escreva("Digite o valor das suas compras: ")
    leia(v)

    se (g == "m") {
      d_m = (13 / 100) * v
      vt_m = v - d_m
      escreva("\nPara mulheres o desconto é de 13%!\nO valor total da sua compra será R$", vt_m ,".")
    }

    se (g == "h") {
      d_h = (5 / 100) * v
      vt_h = v - d_h
      escreva("\nPara homens o desconto é de 5%\nO valor total da sua compra será R$", vt_h, ".")
    }

  }
}
