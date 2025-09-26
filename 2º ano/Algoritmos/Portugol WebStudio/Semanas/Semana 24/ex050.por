//Ana Lívia
programa {

  inclua biblioteca Util --> u

  inteiro a, mi, ma, vs, vm = 0, vd = 0

  funcao inicio() {

    escreva("Digite o valor mínimo a ser sorteado: ")
    leia(mi)
    escreva("Digite o valor máximo a ser sorteado: ")
    leia(ma)


    para(a = 1; a <= 20; a ++) {

      vs = u.sorteia(mi, ma)

      escreva("Nº sorteado: ", vs, "\n")
      

      se(vs > 5) {  

      vm = vm + 1

      }

      se(vs % 3 == 0) {

      vd = vd + 1

      }

    }

    escreva("\nSão ", vm, " números maiores que cinco.")
    escreva("\nSão ", vd, " números divisíveis por 3.")

  }
}
