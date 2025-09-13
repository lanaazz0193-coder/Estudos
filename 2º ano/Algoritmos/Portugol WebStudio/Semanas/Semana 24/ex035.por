//Ana Lívia
programa {

  caracter t_p
  inteiro d
  real km, t_a_d, v_t
  funcao inicio() {

    escreva("Qual o tipo de carro alugado (P, para carro popular e L, para carro de luxo)? ")
    leia(t_p)
    escreva("Por quantos dias o carro foi alugado? ")
    leia(d)
    escreva("Quantos Km foram percorridos? ")
    leia(km)

    se ((t_p == "p") e (km <= 100)) {
      t_a_d = d * 90
      v_t = t_a_d + (km * 0.20)
      escreva("O valor total do aluguel será de R$", v_t, ".")
    }

    se ((t_p == "p") e (km > 100)) {
      t_a_d = d * 90
      v_t = t_a_d + (km * 0.10)
      escreva("O valor total do aluguel será de R$", v_t, ".")
    }

    se ((t_p == "l") e (km <=200)) {
      t_a_d = d * 150
      v_t = t_a_d + (km * 0.30)
      escreva("O valor total do aluguel será de R$", v_t, ".")
    }

    se ((t_p == "l") e (km > 200)) {
      t_a_d = d * 150
      v_t = t_a_d + (km * 0.25)
      escreva("O valor total do aluguel será de R$", v_t, ".")
    }
    
  }
}
