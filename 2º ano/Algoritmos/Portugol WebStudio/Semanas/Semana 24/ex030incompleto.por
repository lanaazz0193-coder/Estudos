//Ana Lívia
programa {

  real a, b, c
  logico w, equi, iso, esca

  funcao inicio() {

    escreva("Qual o tamanho da primeira reta? ")
    leia(a)
    escreva("Qual o tamanho da segunda reta? ")
    leia(b)
    escreva("Qual o tamanho da terceira reta? ")
    leia(c)

    w = (a < b + c) e (b < a + c) e (c < a + b) // possivel formar um triângulo

    equi = ((a == b) e (a == c)) ou ((b == a) e (b == c)) ou ((c == a e c == b))

    iso = (a == b e nao a == c) ou (b == c e nao b == a) ou (c == a e nao c == b)

    
    se (w == verdadeiro) {
      escreva("É possível fazer um triângulo com essas retas!\n")

      se (equi == verdadeiro) {
        escreva("O triângulo será equilátero.")
      } 


      senao {
        escreva("O triângulo será escaleno.")
      }

    }

    senao {
      escreva("Não é possível fazer um triângulo com essas retas.")
    }
    
  }
}

