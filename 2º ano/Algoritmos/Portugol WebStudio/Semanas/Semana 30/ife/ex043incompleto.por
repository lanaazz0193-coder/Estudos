//Ana Lívia
programa {

  inteiro contador = 30

  funcao inicio() {

    enquanto(contador >= 1) {
      
      escreva(contador, " ")
      contador = contador - 1  

      se (contador % 4 == 0) {
        escreva("[", contador, "]")
      }
      
    }
    
    
    escreva("Acabou!")
    
  }
}
