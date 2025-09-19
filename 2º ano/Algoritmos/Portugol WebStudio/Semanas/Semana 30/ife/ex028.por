//Ana Lívia
programa {

  real n1, n2, p1, p2, m1, m2, mt

  funcao inicio() {

    escreva("Digite o valor primeira nota: ")
    leia(n1)
    escreva("Digite o peso da primeira nota: ")
    leia(p1)
    escreva("Digite o valor segunda nota: ")
    leia(n2)
    escreva("Digite o peso da primeira nota: ")
    leia(p2)

    m1 = n1 * p1
    m2 = n2 * p2

    mt = (m1 + m2) / (p1 + p2)

    escreva("A média entre entre essas notas é de ", mt, " pontos.")
    
  }
}
