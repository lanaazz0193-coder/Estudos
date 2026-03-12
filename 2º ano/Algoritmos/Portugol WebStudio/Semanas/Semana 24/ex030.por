//Ana Lívia
programa {
  funcao inicio() {
    real a, b, c

    escreva("Digite o primeiro lado: ")
    leia(a)
    escreva("Digite o segundo lado: ")
    leia(b)
    escreva("Digite o terceiro lado: ")
    leia(c)

    se (a + b > c e a + c > b e b + c > a) {
        escreva("Os lados formam um triangulo.\n")

        se (a == b e b == c) {

            escreva("O Triângulo é equilátero.\n")

        } senao se (a == b ou a == c ou b == c) {

            escreva("O Triângulo é isóceles.\n")

        } senao {

            escreva("O triângulo é escaleno.")

        }

    } senao {

        escreva("Não é possível fazer um triângulo com essas retas.\n")
        
    }
  }
}