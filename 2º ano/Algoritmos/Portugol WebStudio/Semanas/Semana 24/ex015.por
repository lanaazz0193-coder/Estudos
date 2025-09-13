//Ana Lívia
programa {

  inteiro dias_trabalhados, salario, por_dia, por_mes

  funcao inicio() {

  escreva("Digite a quantidade de dias trabalhados: ")
  leia(dias_trabalhados)

  por_dia = 8 * 25  
  por_mes = dias_trabalhados * por_dia

  escreva("Trabalhando ", dias_trabalhados, " dias no mês, o valor total salário será de R$", por_mes)

  }
}
