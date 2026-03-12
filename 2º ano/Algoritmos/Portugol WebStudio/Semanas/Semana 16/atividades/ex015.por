programa {

  real peso, altura, imc

  funcao inicio() {
    

    escreva("Digite seu peso (Kg): ") //Espere o usuário digitar
    leia(peso)
    escreva("Digite sua altura (m): ") //Espere o usuário digitar
    leia(altura)

    imc = (peso/(altura*altura))

    escreva("Seu IMC é: ", imc)


  }
}
