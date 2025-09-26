//Ana Lívia
programa {

  inteiro r, termo, contador = 1, soma = 0

  funcao inicio() {
    
    escreva("Qual é o primeiro termo da PA? ")
    leia(termo)
    escreva("Qual é a razão da PA? ")
    leia(r)

    escreva("\nOs 10 primeiros termos da PA são: ")

    enquanto (contador <= 10) {

      escreva(termo, " ")

      contador = contador + 1
      termo = termo + r
      soma = soma + termo

    }

    escreva("\nA soma dos 10 primeiros termos da PA é ", soma, "\n")

    }
}