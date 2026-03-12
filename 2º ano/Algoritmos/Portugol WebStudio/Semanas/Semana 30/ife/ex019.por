//Ana Lívia
programa {

  inteiro qf, qc, qa
  real vt

  funcao inicio() {

    escreva("Digite a quantidade de frangos: ")
    leia(qf)

    qc = qf * 1
    qa = qf * 2

    vt = (qc * 4) + (qa * 3.50)

    escreva("Serão necessários ", qc, " chips e ", qa, " anéis.")
    escreva("\nO valor total dos chips e anéis será de R$", vt)

    
  }
}
