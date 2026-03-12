//Ana Lívia
programa {

  real qb, qn, qtn

  funcao inicio() {

    escreva("Digite a quantidade de blusas: ")
    leia(qb)
    escreva("Digite a quantidade de novelos utilizados para fazer 1 blusa: ")
    leia(qn)

    qtn = qb * qn

    escreva("Para fazer ", qb, " blusas, você utilizará ", qtn, " novelos de lã.")

  }
}
