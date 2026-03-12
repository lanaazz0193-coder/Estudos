//Ana Lívia
programa {

  inteiro idade, contador = 0, soma_idade = 0
  real media

  funcao inicio() {

    escreva("Digite a idade do(a) aluno(a): ")
    leia(idade)

    enquanto(idade != 999) {

      contador = contador + 1
      soma_idade= soma_idade + idade

      escreva("\nDigite a idade do(a) aluno(a): ")
      leia(idade)
    }

    media = soma_idade / contador

    escreva("\nHá ", contador, " alunos nessa turma.")
    escreva("\nA média de idade deles é de ", media)
    
  }
}
