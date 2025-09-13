//Ana Lívia
programa {

  real salario, aumento, salario_aumento

  funcao inicio() {

    escreva("Digite o salário do funcionário: ")
    leia(salario)

    aumento = (15 /100) * salario
    salario_aumento = salario + aumento

    escreva("Após o aumento o valor do salário será R$", salario_aumento)
    
  }
}
