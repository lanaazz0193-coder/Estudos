//Ana Lívia
programa {

  real preco, desconto, preco_desconto

  funcao inicio() {

  escreva("Qual o preço do produto? ")
  leia(preco)  

  desconto = (5 / 100) * preco
  preco_desconto = preco - desconto

  escreva("O preço deste produto após o desconto é de R$", preco_desconto)

  }
}
