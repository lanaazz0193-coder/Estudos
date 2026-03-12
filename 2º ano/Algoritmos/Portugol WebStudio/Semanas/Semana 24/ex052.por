//Ana Lívia
programa {

  inteiro idade, contador
  real somaidades = 0, mediaidades
  inteiro contmaior18 = 0, contmenor5 = 0, maioridade = 0

  funcao inicio() {

    para(contador = 1; contador <= 10; contador ++){

      escreva("Pessoa ", contador, ". Digite a idade: ")
      leia(idade)
    

    somaidades = somaidades + idade

    se(idade > 18){

    contmaior18 = contmaior18 + 1

    }

    se(idade < 5){

    contmenor5 = contmenor5 + 1

    }

    se(idade > maioridade){

      maioridade = idade

    }

    }

    mediaidades = somaidades / 10

    escreva("\nMédia idade grupo: ", mediaidades)
    escreva("\nPessoas com mais de 18: ", contmaior18)
    escreva("\nPessoas com menos de 5: ", contmenor5)
    escreva("\nMaior idade lida: ", maioridade)
    
  }
}
