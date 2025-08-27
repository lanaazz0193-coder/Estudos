//Ana Lívia
programa {

  real km, v_p

  funcao inicio() {

    escreva("Quantos Km você pretende percorrer? ")
    leia(km)

    se (km <= 200) {
      v_p = km * 0.50
      escreva("Para essa viagem, o valor da passagem é de: ", v_p)
    }

    se (km > 200) {
      v_p = km * 0.45
      escreva("Para essa viagem, o valor da passagem é de: ", v_p)
    }
    
  }
}
