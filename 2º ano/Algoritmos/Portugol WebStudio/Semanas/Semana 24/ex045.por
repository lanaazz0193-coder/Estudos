//Ana Lívia
programa {

  inteiro vi, vf, i


  funcao inicio() {

    escreva("Digite o primeiro valor: ")
    leia(vi)
    escreva("Digite o último valor: ")
    leia(vf)
    escreva("Digite o incremento: ")
    leia(i)

    se (vi < vf ){
      
      enquanto (vi < vf) {
        escreva(vi, " ")
        vi = vi + i
      }
    }

    se (vi > vf) {

      enquanto (vi > vf) {
        escreva(vi, " ")
        vi = vi - i
      }
    }

    
    escreva("Acabou!")

    
  }
}
