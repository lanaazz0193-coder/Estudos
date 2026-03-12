programa {

  real preco_a, preco_b
  logico a_mais_barato, precos_iguais

  funcao inicio() {

    escreva("Preço do Produta A: ")
    leia(preco_a)
    escreva("Preço do produto B: ")
    leia(preco_b)

    a_mais_barato = (preco_a < preco_b)
    precos_iguais = (preco_a == preco_b)

    escreva("Os preços são iguais? ", a_mais_barato, "\n")
    escreva("Os preços são iguais? ", precos_iguais, "\n")
    
  }
}
