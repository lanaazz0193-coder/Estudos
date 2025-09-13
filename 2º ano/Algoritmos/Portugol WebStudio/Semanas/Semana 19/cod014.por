programa {

  inteiro idade

  funcao inicio() {

    escreva("Digite sua idade: ")
    leia(idade)
    
    se (idade <= 12) {
      escreva("Classificação: Criança")
    }

    senao se (idade <= 17) {
    escreva("Classificação: Adolescente")
    }

    senao {
    escreva("Classificação: Adulto")
    }

  }
}
