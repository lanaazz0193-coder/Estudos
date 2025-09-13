//Ana Lívia
programa {

  real altura, largura, area, quantidade_tinta

  funcao inicio() {

    escreva("Qual a altura da parede que você deseja pintar? ")
    leia(altura)
    escreva("Qual a largura desta parede? ")
    leia(largura)

    area = largura * altura 
    quantidade_tinta = area / 2

    escreva("A parede possui ", area, " m²\n")
    escreva("Para pintar essa parede será necessário ", quantidade_tinta, " litros de tinta")
    
  }
}
