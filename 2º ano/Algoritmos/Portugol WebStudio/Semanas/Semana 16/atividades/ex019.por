programa {

  real n1, n2, n3, soma, media

  funcao inicio() {
    
    //Entrada

    escreva("Digite o primeiro valor: ") //Espere o usuário digitar
    leia(n1)
    escreva("Digite o segundo valor: ") //Espere o usuário digitar
    leia(n2)
    escreva("Digite o terceiro valor: ") //Espere o usuário digitar
    leia(n3)

    //Processamento

    soma = n1 + n2 + n3
    media = (n1 + n2 + n3)/3

    //Saída

    escreva("--- Resultados ---")
    escreva("\nValores: ",n1, ", ", n2, ", ", n3)
    escreva("\nSoma Total: ",soma)
    escreva("\nMédia: ", media)


  }
}
