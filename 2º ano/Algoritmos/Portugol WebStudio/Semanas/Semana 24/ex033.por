//Ana Lívia
programa {

  real v_c, s, p
  inteiro a

  funcao inicio() {

    escreva("Digite o valor da casa: ")
    leia(v_c)
    escreva("Digite o salário do comprador: ")
    leia(s)
    escreva("Digite a quantidade de anos que o comprador irá pagar a casa: ")
    leia(a)

    p = v_c / (a * 12)

    se (p > ((30 / 100) * s))
    escreva("Empréstimo negado.")

    senao {
      escreva("Empréstimo aprovado.")
    }
  }
}
