//Ana Lívia
programa {

  inteiro i, preco, ma, me

  funcao inicio() {

    escreva("Digite o valor do produto: ")
    leia(preco)

    ma = preco
    me = preco

    para(i = 1; i <= 7; i ++) {
      escreva("Digite o valor do produto: ")
      leia(preco)

      se(preco < me) {

        me = preco

      }

      se(preco > ma) {

        ma = preco

      }
    }

    escreva("O maior valor é R$", ma, " e o menor é R$", me)
    
  }
}
