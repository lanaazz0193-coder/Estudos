//Ana Lívia
programa {

  real p, a, imc
  
  funcao inicio() {

    escreva("Digite sua altura: ")
    leia(a)
    escreva("Digite seu peso: ")
    leia(p)
    
    imc = p / (a * a)

    se (imc < 18.5) {
      escreva("Você está abaixo do peso, seu IMC é de ", imc, ".")
    }

    se ((imc >= 18.5) e (imc < 25)) {
      escreva("Você está com peso ideal, seu IMC é de ", imc, ".")
    }

    se ((imc >= 25) e (imc < 30)) {
      escreva("Você está com sobrepeso, seu IMC é de ", imc, ".")
    }

    se ((imc >= 30) e (imc <= 40)) {
      escreva("Você está obeso(a), seu IMC é de ", imc, ".")
    }

    se (imc > 40) {
      escreva("Você está com obesidade mórbida, seu IMC é de ", imc, ".")
    }
  }

}
