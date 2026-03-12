programa {

    real preco, consumo, distancia, gastokm, custo

  funcao inicio() {

    //Entrada de dados
    escreva("Preço do combustível (R$/L): ") //Espere o usuário digitar
    leia(preco)
    escreva("Consumo do carro (Km/L): ") //Espere o usuário digitar
    leia(consumo)
    escreva("Distância da viagem (Km): ") //Espere o usuário digitar
    leia(distancia)

    //Processamento de dados 
      gastokm = distancia/consumo
    custo = preco*gastokm

    //Saída de dados
    escreva("O custo total da viagem será de R$ ", custo)
    

  }
}
