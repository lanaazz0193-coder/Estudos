//Ana Lívia
programa {

  real p, p15, p20

  funcao inicio() {

    escreva("Digite seu peso: ")
    leia(p)

    p15 = p + ((15 / 100) * p)
    p20 = p - ((20 / 100) * p)

    escreva("Caso você engorde 15% do seu peso você ficará com ", p15, "KG")
    escreva("\nCaso você emagreça 20% do seu peso você ficará com ", p20, "KG")

    
  }
}
