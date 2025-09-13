//Ana Lívia
programa {

  const inteiro quantidade_dias_ano = 365
  inteiro cigarros_por_dia, quantidade_anos, total_cigarros, tempo_reduzido, tempo_reduzido_dias

  funcao inicio() {

    escreva("Digite a quantidade de cigarros fumados por dia: ")
    leia(cigarros_por_dia)
    escreva("Digite a quantos anos você fuma: ")
    leia(quantidade_anos)

    total_cigarros = (cigarros_por_dia * quantidade_dias_ano) * quantidade_anos
    tempo_reduzido = (total_cigarros * 10) / 60 // Tempo em horas
    tempo_reduzido_dias = tempo_reduzido /24 // Tempo em dias

    escreva("Seu tempo de vida foi reduzido em ", tempo_reduzido_dias, " dias")
    
  }
}
