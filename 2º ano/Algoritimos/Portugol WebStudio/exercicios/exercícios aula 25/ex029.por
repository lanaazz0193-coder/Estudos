//Ana Lívia
programa {

  cadeia n
  real s, au
  inteiro a

  funcao inicio() {

    escreva("Digite o nome do funcionário: ")
    leia(n)
    escreva("Digite o salário de ",n ,": ")
    leia(s)
    escreva("A quantos anos ", n , " trabalha na empresa? ")
    leia(a)

    se (a < 3) {
      au = ((3 / 100) * s) + s
      escreva("O valor que ", n, " deve receber é de R$", au, ".") 
    }
    
    se ((a >= 3) e (a < 10)) {
      au = ((12.5 / 100) * s) + s
      escreva("O valor que ", n, " deve receber é de R$", au, ".") 
    }

    se (a >= 10) {
      au = ((20 / 100) * s) + s
      escreva("O valor que ", n, " deve receber é de R$", au, ".") 

    }
  }
}
