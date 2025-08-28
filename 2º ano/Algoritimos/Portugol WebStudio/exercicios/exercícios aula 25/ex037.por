//Ana Lívia
programa {

  real s, s_a
  cadeia g
  inteiro a

  funcao inicio() {

    escreva("Digite o salário do funcionário: ")
    leia(s)
    escreva("Digite o genêro do funcionário: ")
    leia(g)
    escreva("Há quantos anos esse funcionário trabalha na empresa? ")
    leia(a)


  // se for mulher 

    se ((g == "feminino") e (a < 15)) {
      s_a = ((5 / 100) * s) + s
      escreva("O novo salário dessa funcionária deve ser de R$", s_a, ".")
    }

    se ((g == "feminino") e ((a >= 15) e (a <= 20))) {
      s_a = ((12 / 100) * s) + s
      escreva("O novo salário dessa funcionária deve ser de R$", s_a, ".")
    }

    se ((g == "feminino") e (a > 20)) {
      s_a = ((23 / 100) * s) + s
      escreva("O novo salário dessa funcionária deve ser de R$", s_a, ".")
    }

    // se for homem

    se ((g == "masculino") e (a < 20)) {
      s_a = ((3 / 100) * s) + s
      escreva("O novo salário desse funcionário deve ser de R$", s_a, ".")
    }

    se ((g == "masculino") e ((a >= 20) e (a <= 30))) {
      s_a = ((13 / 100) * s) + s
      escreva("O novo salário desse funcionário deve ser de R$", s_a, ".")
    }

    se ((g == "masculino") e (a > 30)) {
      s_a = ((25 / 100) * s) + s
      escreva("O novo salário desse funcionário deve ser de R$", s_a, ".")
    }
    
  }
}
