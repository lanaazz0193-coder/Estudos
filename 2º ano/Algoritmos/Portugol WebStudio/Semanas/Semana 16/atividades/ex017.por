programa {

  cadeia nomeitem
  real pesoitem, pesototal
  inteiro quantidade
  

  funcao inicio() {

    //entrada
    escreva("Nome do item: ") //Espere o usuário digitar
    leia(nomeitem)
    escreva("Peso unitários (Oz): ") //Espere o usuário digitar
    leia(pesoitem)
    escreva("Quantidade em posse: ") //Espere o usuário digitar
    leia(quantidade)

  
    //processamento

    pesototal = pesoitem*quantidade


    //saida
    escreva("--- Detalhes do Item ---\n")
    escreva("Item: ", nomeitem, "\n")
    escreva("Quantidade: ",quantidade, "\n")
    escreva("Peso Unitário: ",pesoitem, " Oz\n")
    escreva("Peso Total: ", pesototal, " Oz")


  }
}
