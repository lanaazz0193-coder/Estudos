//Ana Lívia
programa {

  real s, sa, si, a, i

  funcao inicio() {

    escreva("Digite o valor do salário do funcionário: ")
    leia(s)

    a = s * (15 / 100)
    i = s * (8 / 100)

    sa = s + a
    si = s - i

    escreva("O salário inical é R$", s)
    escreva("\nO salário do funcionário após o aumento é R$", sa)
    escreva("\nO salário do funcionário após os impostos é R$", si)
    
  }
}
