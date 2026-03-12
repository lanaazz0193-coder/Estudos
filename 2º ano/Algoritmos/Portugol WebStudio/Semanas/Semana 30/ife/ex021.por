//Ana Lívia
programa {

  inteiro a, b, c
  real tl

  funcao inicio() {

    escreva("Digite a quantidade de refrigerantes de 350 ml comprados: ")
    leia(a)
    escreva("Digite a quantidade de refrigerantes de 600 ml comprados: ")
    leia(b)
    escreva("Digite a quantidade de refrigerantes de 2 l comprados: ")
    leia(c)

    tl = (a * 0.350) + (b * 0.600) +(c *2.000)


    escreva("O total em litros de refrigerante comprado é de ", tl)
    
  }
}
