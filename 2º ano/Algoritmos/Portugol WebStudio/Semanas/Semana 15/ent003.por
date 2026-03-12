programa {

    cadeia nome_item
    real peso_item, carga_total, peso_total_gold
    inteiro quantidade_gold
    const real peso_gold = 0.10

  funcao inicio() {

    escreva("--- Calculadora de Carga de Itens (Tibia) ---\n")
    escreva("Nome do item principal: ", nome_item) //Espere o usuário digitar
    leia(nome_item)

    escreva("Peso do item principal (Oz): ", peso_item) //Espere o usuário digitar
    leia(peso_item)

    escreva("Quantidade de Gold Coins: ", quantidade_gold) //Espere o usuário digitar
    leia(quantidade_gold)

    peso_total_gold = quantidade_gold * peso_gold

    carga_total = peso_item + peso_total_gold

    escreva("\n--- Resumo da Carga ---")

    escreva("\nItem Principal: ", nome_item, "      Oz")
    escreva("\nGold Coins: ", quantidade_gold, "      Oz")
    escreva("\nCarga Total Estimada: ", carga_total, "      Oz")


  }
}
