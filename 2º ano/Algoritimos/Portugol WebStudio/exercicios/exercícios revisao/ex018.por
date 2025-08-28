programa {

  cadeia nomeproduto
  const real desconto = 0.15
  real precoproduto, precototaldesconto, precofinal

  funcao inicio() {
    //Entrada

    escreva("Nome do produto: ") //Espere o usuário digitar
    leia(nomeproduto)
    escreva("Preço Original: R$", precoproduto) //Espere o usuário digitar
    leia(precoproduto)

    //Processamento

  precototaldesconto = precoproduto * desconto
  precofinal = precoproduto - precototaldesconto 

    //Saída
    escreva("--- Preço Promocional ---\n")
    escreva("Produto: ", nomeproduto, "\n")
    escreva("Preço Original: R$",precoproduto, "\n")
    escreva("Desconto (15.0%): R$", precototaldesconto, "\n")
    escreva("Preço Final: R$ ", precofinal, "\n")





  }
}
