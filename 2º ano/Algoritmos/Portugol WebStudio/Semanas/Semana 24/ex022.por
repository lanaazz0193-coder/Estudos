//Ana Lívia
programa {
  
  inteiro ano_n, ano_a, i, f, p

  funcao inicio() {

    escreva("Digite o ano em que você nasceu: ")
    leia(ano_n)
    escreva("Digie o ano atual: ")
    leia(ano_a)

    i = ano_a - ano_n
    f = 18 - i
    p = i - 18

    escreva("Você tem ", i, " anos.\n")

    se (i < 18) {
      escreva("Você ainda não tem idaade para se alistar, faltam ", f , " ano(s).")
    }

    se (i == 18) {
      escreva("Você possui a idade correta para se alistar.")
    }

    se (i > 18) {
      escreva("Você não tem idade para se alistar, se passaram ", p , " ano(s) desde a idade para se alistar.")
    }
    
  }
}
