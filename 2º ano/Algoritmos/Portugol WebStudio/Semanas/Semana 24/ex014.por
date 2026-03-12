//Ana Lívia
programa {

  inteiro dias, valor_dias
  real km, valor_por_km, valor_total

  funcao inicio() {

    escreva("Digite a quantidade de quilômetros percorridos: ")
    leia(km)
    escreva("Digite a quantidade de dias com o carro alugado: ")
    leia(dias)

    valor_dias = dias * 90
    valor_por_km = km *0.20
    valor_total = valor_dias + valor_por_km

    escreva("O valor total a ser pago pelos ", dias, " e ", km, " é de R$",valor_total)
    
  }
}
